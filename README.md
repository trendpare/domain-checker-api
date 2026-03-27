# 🚀 Domain Availability Checker API

A lightweight PHP-based API to check domain availability across multiple extensions.

## 🔧 Features
- Check multiple domain extensions (com, net, org)
- Fast DNS-based validation
- Simple and clean API structure
- Easy to integrate into any project

## 📌 Usage

Make a GET request:



/index.php?key=YOUR_API_KEY&domain=example



## ⚙️ Example Response

```json
[
  {
    "domain": "example.com",
    "available": false
  },
  {
    "domain": "example.net",
    "available": true
  },
  {
    "domain": "example.org",
    "available": true
  }
]


🧠 How It Works

This API checks DNS records using PHP's checkdnsrr() function.
If no DNS record is found, the domain is considered available.

⚙️ Installation
Clone the repository
Set your API key in config.php
Upload files to your server
Start making requests
🔐 Security
Basic API key protection included
Can be extended with rate limiting
🚀 Future Improvements
More domain extensions
Whois integration
Caching system