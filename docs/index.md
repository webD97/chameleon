# Chameleon
Chameleon is a PHP image manipulation library built around the GD extension.

Please note that Chameleon is still in development. Everything you see is subject to change. Existing features might be changed or removed without notice.

## Features
- Create True Color images from scratch or load and edit existing ones
- Convert palette images to True Color
- Full transparency support
- Multiple color systems: RGB, RGBA, 6-digit Hex, 8-digit Hex, HSL, HSLA, HSV
- Basic image manipulation: Scale, rotate, flip and crop images
- Direct pixel manipulation
- Image filters: Invert, Emboss, Brightness, Edgedetect, Smooth, Grayscale, Gaussian Blur, Selective Blur, Colorize, Contrast, Pixelate, Mean Removal
- Different output formats: PNG, JPG and GIF
- Output to the browser, a file stream or a base64 encoded string (e.g. for data URIs)
- Object-oriented programming interface
- Extensible by extending the built-in classes

## Requirements
- PHP >= 7.1
- libgd (Ubuntu: `sudo apt install php7-gd`)