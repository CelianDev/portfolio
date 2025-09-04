# 🚀 Portfolio Personnel - Développeur Full-Stack

## 🎯 À propos

Bienvenue sur mon portfolio personnel ! Cette application web présente mes compétences, projets et expériences en tant que développeur full-stack. Construite avec des technologies modernes, elle démontre ma maîtrise du développement web contemporain.

## ✨ Fonctionnalités

- **🏠 Page d'accueil** - Présentation personnelle et vue d'ensemble
- **📄 CV interactif** - Mon parcours professionnel et formation
- **🛠 Compétences BTS SIO** - Détail de mes compétences techniques acquises
- **🔐 Section Cybersécurité** - Projets et connaissances en sécurité informatique
- **💼 Réalisations Professionnelles** - Projets en entreprise et centre de formation
- **📧 Contact** - Formulaire de contact fonctionnel
- **🎨 Design responsive** - Interface adaptative sur tous les appareils
- **⚡ Animations fluides** - Transitions et animations CSS modernes

## 🛠 Technologies utilisées

### Frontend
- **Vue.js 3** - Framework JavaScript progressif
- **TypeScript** - Superset typé de JavaScript
- **Inertia.js** - Liaison moderne entre backend et frontend
- **TailwindCSS** - Framework CSS utility-first
- **PrimeVue** - Composants UI Vue.js
- **Animate.css** - Animations CSS prêtes à l'emploi

### Backend
- **Laravel 11** - Framework PHP élégant
- **PHP 8.4** - Dernière version de PHP
- **Laravel Breeze** - Kit d'authentification minimal
- **Laravel Sanctum** - Authentification API simple

### Outils de développement
- **Vite** - Bundler moderne et serveur de développement
- **Pest** - Framework de tests PHP moderne
- **Laravel Pint** - Outil de formatage de code PHP

## 🚀 Installation

### Prérequis
- PHP 8.4+
- Composer
- Node.js 18+
- npm ou yarn

### Étapes d'installation

1. **Cloner le repository**
```bash
git clone https://github.com/votre-username/portfolio.git
cd portfolio
```

2. **Installer les dépendances PHP**
```bash
composer install
```

3. **Installer les dépendances Node.js**
```bash
npm install
```

4. **Configuration de l'environnement**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configuration de la base de données**
```bash
php artisan migrate
```

6. **Compiler les assets**
```bash
npm run build
```

7. **Lancer l'application**
```bash
php artisan serve
npm run dev
```

L'application sera accessible sur `http://localhost:8000`

## 📁 Structure du projet

```
portfolio/
├── app/
│   ├── Http/Controllers/
│   │   ├── PortfolioController.php    # Contrôleur principal du portfolio
│   │   └── MailController.php         # Gestion des emails de contact
│   └── Mail/
│       └── ContactMe.php              # Classe pour les emails de contact
├── resources/
│   ├── js/
│   │   ├── Components/
│   │   │   ├── TailwindUI/            # Composants UI personnalisés
│   │   │   └── Mine/                  # Mes composants personnels
│   │   └── Pages/
│   │       └── Portfolio.vue          # Page principale SPA
│   └── views/                         # Templates Blade
├── routes/
│   └── web.php                        # Routes de l'application
└── public/                            # Assets publics
```

## 🎨 Sections du portfolio

### 🏠 Accueil
- Présentation personnelle
- Aperçu des compétences
- Stack technique

### 📄 CV
- Expérience professionnelle
- Formation
- Compétences techniques
- Téléchargement PDF

### 🛠 Compétences BTS SIO
- Détail des compétences acquises
- Projets réalisés
- Technologies maîtrisées

### 🔐 Cybersécurité
- Projets de sécurité informatique
- Certifications
- Veille technologique

### 💼 Réalisations Professionnelles
- Projets en entreprise
- Projets de centre de formation
- Technologies utilisées
- Résultats obtenus

### 📧 Contact
- Formulaire de contact fonctionnel
- Informations de contact
- Réseaux sociaux

## 🚀 Déploiement

### Production
```bash
# Optimiser l'autoloader
composer install --optimize-autoloader --no-dev

# Compiler les assets pour la production
npm run build

# Optimiser la configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🤝 Contribution

Ce projet est un portfolio personnel, mais les suggestions d'amélioration sont les bienvenues !

1. Fork le projet
2. Créez votre branche (`git checkout -b feature/AmazingFeature`)
3. Committez vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une Pull Request

## 📝 Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## 📞 Contact

**Développeur Full-Stack** - Étudiant BTS SIO SLAM

- 📧 Email : contact@celian-dev.pro

---

<div align="center">
  <i>Développé avec ❤️ par un passionné de technologie</i>
</div>
