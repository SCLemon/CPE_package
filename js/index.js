import fs from "fs";
import axios from "axios";
import * as cheerio from "cheerio";
import path from "path";

const BASE_URL = "https://cpe.mcu.edu.tw"; // 改成你的主網域
const DOWNLOAD_DIR = "./download";

// 建立資料夾
if (!fs.existsSync(DOWNLOAD_DIR)) {
  fs.mkdirSync(DOWNLOAD_DIR);
}

// 讀 link.json
const links = JSON.parse(
  fs.readFileSync("./links.json", "utf-8")
);

async function downloadFile(group, url) {
  try {
    const folder = path.join(DOWNLOAD_DIR, group);

    if (!fs.existsSync(folder)) {
      fs.mkdirSync(folder, { recursive: true });
    }
    
    const filename = path.basename(url.split("?")[0]);
    const filepath = path.join(folder, filename);

    console.log("⬇️ 下載:", filename);

    const response = await axios({
      method: "GET",
      url,
      responseType: "stream"
    });

    const writer = fs.createWriteStream(filepath);
    response.data.pipe(writer);

    return new Promise((resolve, reject) => {
      writer.on("finish", resolve);
      writer.on("error", reject);
    });

  } catch (err) {
    console.log("❌ 下載失敗:", url);
  }
}


async function processPage(pageUrl) {
  try {
    console.log("🔍 解析:", pageUrl);

    const { data } = await axios.get(pageUrl);
    const $ = cheerio.load(data);

    const fileLinks = [];

    $("a[href^='/cpe']").each((_, el) => {
      let href = $(el).attr("href");
      if (!href) return;

      if (href.match(/\.(pdf|txt|php)($|\?)/)) {
        if (href.startsWith("/")) {
          href = BASE_URL + href;
        }
        fileLinks.push(href);
      }
    });

    // 去重
    const uniqueLinks = [...new Set(fileLinks)];
    console.log(uniqueLinks)
    const group = pageUrl.split('/')[pageUrl.split('/').length - 1];
    for (const fileUrl of uniqueLinks) {
      await downloadFile(group, fileUrl);
    }

  } catch (err) {
    console.log("❌ 解析失敗:", pageUrl);
  }
}

async function main() {
  for (const url of links) {
    await processPage(url);
  }

  console.log("🎉 全部完成");
}

main();
