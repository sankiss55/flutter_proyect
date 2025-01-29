#!/bin/bash
sudo apt update && sudo apt upgrade -y
sudo apt install -y curl git unzip xz-utils zip libglu1-mesa openjdk-11-jdk

# Descargar e instalar Flutter
git clone https://github.com/flutter/flutter.git -b stable
export PATH="$PATH:`pwd`/flutter/bin"
echo 'export PATH="$PATH:`pwd`/flutter/bin"' >> ~/.bashrc

# Verificar la instalación de Flutter
flutter --version
