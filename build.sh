#!/bin/bash

echo "Welcome to WSOFT's WebSite!"
echo "Copyright © 2023 WSOFT All Rights Reserved."

chmod +x cei

echo "Building the WSOFT's WebSite..."
./cei common/layout.html --min .
echo "Build completed. Please check . directory."