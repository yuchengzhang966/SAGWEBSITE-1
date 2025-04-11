#!/bin/bash

# Add dark-mode.css to service page files
echo "Adding dark mode CSS to service pages..."
find services -name "*.php" | while read file; do
  # Check if dark-mode.css is already included
  if ! grep -q "dark-mode.css" "$file"; then
    # Add dark-mode.css after styles.css
    sed -i '' 's|<link rel="stylesheet" href="../css/styles.css">|<link rel="stylesheet" href="../css/styles.css">\n    <link rel="stylesheet" href="../css/dark-mode.css">|' "$file"
    echo "Updated: $file"
  else
    echo "Already has dark mode: $file"
  fi
done

# Add dark-mode.css to resource page files
echo "Adding dark mode CSS to resource pages..."
find resources -name "*.php" | while read file; do
  # Check if dark-mode.css is already included
  if ! grep -q "dark-mode.css" "$file"; then
    # Add dark-mode.css after styles.css
    sed -i '' 's|<link rel="stylesheet" href="../css/styles.css">|<link rel="stylesheet" href="../css/styles.css">\n    <link rel="stylesheet" href="../css/dark-mode.css">|' "$file"
    echo "Updated: $file"
  else
    echo "Already has dark mode: $file"
  fi
done

# Add dark-mode.css to root PHP files if they don't already have it
echo "Adding dark mode CSS to root PHP files..."
for file in *.php; do
  # Skip files that already have dark-mode.css
  if ! grep -q "dark-mode.css" "$file"; then
    # Add dark-mode.css after styles.css
    sed -i '' 's|<link rel="stylesheet" href="css/styles.css">|<link rel="stylesheet" href="css/styles.css">\n    <link rel="stylesheet" href="css/dark-mode.css">|' "$file"
    echo "Updated: $file"
  else
    echo "Already has dark mode: $file"
  fi
done

echo "Dark mode CSS has been added to all PHP files." 