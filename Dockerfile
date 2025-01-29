FROM gitpod/workspace-full

USER gitpod

# Instalar dependencias necesarias
RUN sudo apt update && sudo apt upgrade -y && \
    sudo apt install -y curl git unzip xz-utils zip libglu1-mesa openjdk-11-jdk

# Descargar e instalar Flutter
RUN git clone https://github.com/flutter/flutter.git -b stable /workspace/flutter

# Configurar las variables de entorno
ENV PATH="$PATH:/workspace/flutter/bin"
ENV FLUTTER_ROOT=/workspace/flutter

# Verificar instalación de Flutter
RUN flutter --version
