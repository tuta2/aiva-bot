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
Hi, I’m AIVA (Airtel Intelligence Virtual Assistant).  
How may I assist you today? Please reply with the option number or text:

1. Reset Password  
2. uSDM Login Help  
3. No Password Received  
4. New Partner (Onboarding)  
5. Place an Order (SIMCARDS / DEVICES)  
6. Check Order Approval  
7. Dispatch / Collection Info  
8. Return Device  
9. Contact Support  

---------------------------------------------------------
1. Reset Password
- On the uSDM login page, click **Forgot Password**.  
- Enter your **User ID** and click **Save**.  
- You will receive your **User ID and Password** by:  
  - Email (registered during account creation)  
  - Airtel number (registered during account creation)  
- If you do not receive the password message:  
  - Contact your **Partner Account Executive (PAE)**.  
  - Provide: **User Name**, **Account ID**, **Email**, and **Correct Airtel Number**.  

---------------------------------------------------------
2. uSDM Login Help
- To log in, click the uSDM portal link:  
   https://distributorportal.airtelkenya.com/uSDM/index.jsp  
- Enter your valid **User ID** and **Password**.  
- If you are a new partner, see Option 4.  
- If you cannot access your account, reset via Option 1 or contact your PAE.  

---------------------------------------------------------
3. No Password Received
- If the reset password email/SMS is not received:  
  - Check your spam/junk folder.  
  - Confirm the registered Airtel email/phone number.  
- If still not received:  
  - Contact your **PAE** and share your **account details** for assistance.  

---------------------------------------------------------
4. New Partner (Onboarding)
- To onboard a new partner and get login credentials:  
  - Kindly contact your **Partner Account Executive (PAE)**.  
  - Provide your **Partner ID**, business details, and contact information.  
- Your PAE will escalate for account creation in uSDM.  

---------------------------------------------------------
5. Place an Order (SIMCARDS / DEVICES)
- Available products in uSDM:  
  - **104962888 – 5G Enterprise Broadband SIMCARD**  
  - **104639318 – 5G HBB Device Tozed ZLT X25A 5G CPE**  
- Steps:  
  1. Log in to uSDM:  
      https://distributorportal.airtelkenya.com/uSDM/index.jsp  
  2. Select **HBB Device Dealer Responsibility**.  
  3. Choose **SIMCARDS** or **DEVICES**.  
  4. Enter product code, quantity, and delivery preference.  
  5. Submit your order.  

---------------------------------------------------------
6. Check Order Approval
- Orders require **Partner Account Executive (PAE)** approval.  
- Finance team also validates:  
  - Your assigned **deposit threshold**.  
  - Activation of devices from the last batch.  
- To check status:  
  - Go to **Order History** in uSDM.  
  - Enter your **Order ID** → click **Show Detail**.  
- Always **share the Order ID with your PAE** for approval.  

---------------------------------------------------------
7. Dispatch / Collection Info
- Orders can be:  
  - **Self-collected** from the source warehouse.  
  - **Couriered** to your location (based on preference & warehouse).  
- Select your method when submitting the order.  

---------------------------------------------------------
8. Return Device
- For faulty devices:  
  1. Log in to uSDM:  
     https://distributorportal.airtelkenya.com/uSDM/index.jsp  
  2. Go to **Stock Return Order Entry**.  
  3. Enter the **Device Serial Number**.  
  4. Select the **Return Reason** (e.g., faulty/damaged).  
  5. Submit the return request.  
- Once you raise the stock return, **share the Order ID with your PAE** for approval.  
- If you fail to raise the return in uSDM, the device stays in your stock as pending activation.  

---------------------------------------------------------
9. Contact Support
Contact your PAE(Partner Account Exercutive)  
- **Enterprise Team**  
  📧 AirtelKenyaEnterpriseTeam@ke.airtel.com  
