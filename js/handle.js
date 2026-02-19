import fs from "fs";
import path from "path";

const ROOT_DIR = "./download";

function renameInsideFolders(rootDir) {
  const folders = fs.readdirSync(rootDir);

  for (const folder of folders) {
    const folderPath = path.join(rootDir, folder);

    // 只處理資料夾
    if (!fs.statSync(folderPath).isDirectory()) continue;

    const files = fs.readdirSync(folderPath);

    for (const file of files) {
      const filePath = path.join(folderPath, file);

      if (!fs.statSync(filePath).isFile()) continue;

      // 抓 uva 後面的數字
      const match = file.match(/uva(\d+)/);

      if (match) {
        const uvaNumber = match[1];
        const ext = path.extname(file); // .txt 或 .pdf

        const newName = `${uvaNumber}${ext}`;
        const newPath = path.join(folderPath, newName);

        if (fs.existsSync(newPath)) {
          console.log("⚠ 已存在，跳過:", newPath);
          continue;
        }

        fs.renameSync(filePath, newPath);
        console.log("✅ 重命名:", filePath, "→", newPath);
      }
    }
  }
}

renameInsideFolders(ROOT_DIR);

console.log("🎉 全部處理完成");
