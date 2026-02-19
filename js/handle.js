import fs from "fs";
import path from "path";

const BASE_DIR = "./combined";
const QUESTION_DIR = path.join(BASE_DIR, "question");
const SOLUTION_DIR = path.join(BASE_DIR, "solution");

// 建立資料夾
if (!fs.existsSync(QUESTION_DIR)) {
  fs.mkdirSync(QUESTION_DIR);
}

if (!fs.existsSync(SOLUTION_DIR)) {
  fs.mkdirSync(SOLUTION_DIR);
}

const files = fs.readdirSync(BASE_DIR);

for (const file of files) {
  const filePath = path.join(BASE_DIR, file);

  // 跳過資料夾本身
  if (!fs.statSync(filePath).isFile()) continue;

  const ext = path.extname(file).toLowerCase();

  let targetPath;

  if (ext === ".pdf") {
    targetPath = path.join(QUESTION_DIR, file);
  } else {
    targetPath = path.join(SOLUTION_DIR, file);
  }

  // 避免覆蓋
  if (fs.existsSync(targetPath)) {
    console.log("⚠ 已存在，跳過:", file);
    continue;
  }

  fs.renameSync(filePath, targetPath);
  console.log("✅ 移動:", file);
}

console.log("🎉 分類完成");
