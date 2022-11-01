<p align="center">
  <a href="" rel="noopener">
 <img src="https://i.imgur.com/98WZcsJ.png" alt="Project header"></a>
</p>
<h1 align="center">LePasTropBonCoin</h1>
<div align="center">
<h3 align="center">Projet HETIC Oct. 2022</h3>
</div>

<br>
---

<br>

## ⚙️ Installation

```
git clone https://github.com/LifestreamVII/lepastropboncoin.git
cd lepastropboncoins  
docker-compose up -d
sudo chown -R $USER ./*
docker exec -it symfony_docker bash
cd html
composer update
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load
exit
chmod -R 777 src/public/ (pb de permissions à corriger)
chmod -R 777 src/public/*
```

<br>
---
## 💻 Demo

à venir
