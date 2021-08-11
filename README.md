Evsun

* The long lived access tokens for the API expire after 60 days. 
* This package includes an artisan command that will handle this 
for you, you just need to ensure that it runs at least once every 
60 days. The command is php artisan instagram-feed:refresh-tokens
