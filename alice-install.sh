#!/bin/bash

echo 'Losetta Installer'
if [ "$(uname)" == 'Linux' ]  && [ "$(uname -m)" == 'x86_64' ]; then
  echo 'x86_64 Linux'
  curl -L https://download.wsoft.ws/WS00310/Download -o /usr/local/bin/alice
  chmod +x /usr/local/bin/alice
elif [ "$(uname)" == 'Darwin' ]  && [ "$(uname -m)" == 'x86_64' ]; then
  echo 'x86_64 Mac'
  curl -L https://download.wsoft.ws/WS00320/Download -o /usr/local/bin/alice
  chmod +x /usr/local/bin/alice
elif [ "$(uname)" == 'Darwin' ]  && [ "$(uname -m)" == 'arm64' ]; then
  echo 'Arm64 Mac'
  curl -L https://download.wsoft.ws/WS00321/Download -o /usr/local/bin/alice
  chmod +x /usr/local/bin/alice
fi
