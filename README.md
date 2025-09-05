# AIVA BOT

## Introduction

Web interface for the Airtel Intelligence Virtual Assistant – guiding Partners, Account Executives and Line Managers through 5G device orders to password resets on the Unified Sales Distribution Management Portal (USDM).

* Landing Page.
- Development: http://localhost/aiva-bot/
- Production: https://aivabot.ezktech.com/

Setting up DB:
- Go To: http://localhost/phpmyadmin
- DB Name(eg: aiva_db)
- seed db: http://localhost/aiva-bot/db/db-setup.php
- For production: https://aivabot.ezktech.com/db/db-setup.php

Watch CSS:
```
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --watch
```

Deployment:

Minify CSS:
```
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --minify
```

## Uploading files:

Give permission to upload folder: 
```
mkdir uploads
chmod 0755 uploads
sudo chown -R daemon:daemon uploads
```
