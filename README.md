# ZenPlus
A less-feature server software for Minecraft: Bedrock Edition. This is fork from <a href="https://github.com/pmmp/PocketMine-MP/">PocketMine-MP</a>. This project supported by VenityNetwork.

# Features
#### ZenPlus
- Disable Internal Server Error
#### Multi Protocol
- 1.16.0 (407)
- 1.16.20 (408, No packet changes from 1.16.0)
#### Waterdog
- Fix address blocked for 300 seconds

# Requirements
- PHP >= 7.3.0 from PocketMine-MP
- Composer

# How to Compile
1. Open terminal or command prompt.
2. Type ```composer install```
3. Type ```cd build``` folder
4. Type ```/your/php/path/php -dphar.readonly=0 ConsoleScript.php --make src --relative ./ --entry ../src/pocketmine/PocketMine.php --out PocketMine-MP.phar```
