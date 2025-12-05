<?php
header("Content-Type: application/xml; charset=utf-8");

// XML )
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
echo '  <url>' . "\n";
echo '    <loc>https://leaked.mwtether.online/</loc>' . "\n";
echo '    <lastmod>' . date("Y-m-d") . '</lastmod>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>1.0</priority>' . "\n";
echo '  </url>' . "\n";

$slugs = [
  "viral-south-african-teacher-and-her-student-pt1",
  "viral-south-african-teacher-and-her-student-pt2",
  "viral-south-african-teacher-and-her-student-pt3",
  "viral-south-african-teacher-and-her-student-pt4"
  
];

foreach ($slugs as $slug) {
  echo '  <url>' . "\n";
  echo '    <loc>https://leaked.mwtether.online/' . htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') . '</loc>' . "\n";
  echo '    <lastmod>' . date("Y-m-d") . '</lastmod>' . "\n";
  echo '    <priority>0.9</priority>' . "\n";
  echo '  </url>' . "\n";
}

echo '</urlset>';
?>
