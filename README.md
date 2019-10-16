# Emoji
Easy Emoji Usage on Php  
#

── ▄▀▀▀▀▀─ ─ ▄█▀▀▀█▄  
──▐▄▄▄▄▄▄▄▄██▌▀▄▀▐██  
──▐▒▒▒▒▒▒▒▒███▌▀▐███  
───▌▒▓▒▒▒▒▓▒██▌▀▐██  
───▌▓▐▀▀▀▀▌▓─▀▀▀▀▀  


### Usage
    $emoji = Emoji::getInstance();
    
    $emoji->emojiName;
    $emoji::category(emojiName);
    $emoji::category()->emojiName;
    $emoji::category::subCategory(emojiName);
    $emoji::category::subCategory()->emojiName;
