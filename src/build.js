import { execSync } from "child_process";
import fs from "fs";
import path from "path";

const PUBLIC_DIR = "public";
const DIST_DIR = "dist";

/**
 * Recursive olarak tüm php dosyalarını bulur
 */
function getPhpFiles(dir) {
  let results = [];

  const list = fs.readdirSync(dir);

  list.forEach(file => {
    const filePath = path.join(dir, file);
    const stat = fs.statSync(filePath);

    if (stat.isDirectory()) {
      results = results.concat(getPhpFiles(filePath));
    } else if (file.endsWith(".php")) {
      results.push(filePath);
    }
  });

  return results;
}

/**
 * Çıktı klasörünü oluşturur
 */
function ensureDir(filePath) {
  fs.mkdirSync(path.dirname(filePath), { recursive: true });
}

/**
 * .php linkleri .html yapar
 */
function convertPhpLinksToHtml(html) {
  return html.replace(/href="([^"]+)\.php([^"]*)"/g, 'href="$1.html$2"');
}

const phpFiles = getPhpFiles(PUBLIC_DIR);

phpFiles.forEach(inputPath => {
  const relativePath = path.relative(PUBLIC_DIR, inputPath);

  const outputPath = path.join(
    DIST_DIR,
    relativePath.replace(/\.php$/, ".html")
  );

  console.log("Building:", outputPath);

  const html = execSync(`php ${inputPath}`, {
    encoding: "utf8"
  });

  const convertedHtml = convertPhpLinksToHtml(html);

  ensureDir(outputPath);
  fs.writeFileSync(outputPath, convertedHtml);
});

/**
 * SENİN all.css silme olayın aynen duruyor
 */
const filesToDelete = [
  "public/assets/css/all.css",
  "public/assets/css/all.css.map"
];

filesToDelete.forEach(file => {
  if (fs.existsSync(file)) {
    fs.rmSync(file);
    console.log("Deleted:", file);
  }
});

console.log("HTML build complete");