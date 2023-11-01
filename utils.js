// 假設這是一個 utils.js 檔案

const project_name = "ci-yun";
const siteUrl = "http://localhost/" + project_name;

// 網址
export function site_url() {
  const protocol = window.location.protocol;
  const domainName = window.location.host + '/';
  return protocol + '//' + domainName;
}

// 圖片網址
export function image_dir() {
  return site_url() + 'assets/imgs/';
}

// 引入SVG檔案 (這個函數需要額外的實現，因為它涉及到檔案讀取)
export function get_svg(filename) {
  // 這裡通常會用到Ajax或其他方法來讀取SVG檔案
}
