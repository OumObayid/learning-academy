# 🎓 Learning Academy

![Laravel](https://img.shields.io/badge/Laravel-9.10.1-red)
![PHP](https://img.shields.io/badge/PHP-8.1-blue)
![MySQL](https://img.shields.io/badge/MySQL-8.0-green)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6-purple)

> Une plateforme de cours en ligne permettant aux étudiants d’acheter des formations dispensées par des formateurs experts.

---

## 🌟 Aperçu du projet

Learning Academy est un **site e-learning** développé avec **Laravel**, **PHP**, **MySQL**, **HTML5**, **CSS3**, **Bootstrap 4** et **JavaScript**.  
Il permet :

- Navigation fluide entre les sections
- Consultation des cours en ligne
- Achat de cours via le site
- Gestion des étudiants et formateurs via un panneau d'administration
- Design responsive pour desktop, tablettes et mobiles

---

## 🛠️ Outils et technologies utilisées

| Technologie | Icône | Version |
|------------|------|--------|
| Laravel    | 🖤    | 9.10.1 |
| PHP        | 🐘    | 8.1    |
| MySQL      | 🗄️    | 8.0    |
| HTML5      | 🌐    | -      |
| CSS3       | 🎨    | -      |
| Bootstrap  | 💠    | 4.6    |
| JavaScript | ⚡    | ES6    |

---

## 🚀 Installation et configuration

### 1. Cloner le projet :
```
git clone https://github.com/ton-utilisateur/learning-academy.git
```

### 2. Aller dans le dossier du projet
```
cd learning-academy
```

### 3. Installer les dépendances Composer
```
composer install
```

### 4. Copier le fichier .env.example et le renommer en .env
```
cp .env.example .env
```

### 5. Configurer la base de données dans .env
#### Exemple :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=learning
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Générer la clé de l'application
```
php artisan key:generate
```

#### 7. Lancer les migrations
```
php artisan migrate
```

## 🚀 Mise en marche
# Démarrer le serveur
```
php artisan serve
```
