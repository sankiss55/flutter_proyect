# Usa una imagen base estándar de Gitpod
FROM gitpod/workspace-full

# Instalar las dependencias necesarias
RUN sudo apt update && sudo apt install -y curl git unzip xz-utils zip libglu1-mesa openjdk-11-jdk

# Descargar e instalar Flutter
RUN git clone https://github.com/flutter/flutter.git -b stable
ENV PATH="$PATH:/workspace/flutter/bin"
