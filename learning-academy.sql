-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 mai 2022 à 11:54
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `learning-academy`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'oumaimato', 'admin@gmail.com', '$2y$10$ySzZUHEiq4g/diadUoAqGOg3woq.6XzZDxkbkG01oaJgg92hikIpu', '2022-05-03 20:22:14', '2022-05-03 20:22:14');

-- --------------------------------------------------------

--
-- Structure de la table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cats`
--

INSERT INTO `cats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web development', '2022-05-01 22:58:36', '2022-05-07 14:05:34'),
(7, 'Mobile development', '2022-05-07 07:45:12', '2022-05-07 14:05:09'),
(8, 'Programming languages', '2022-05-07 07:49:22', '2022-05-07 14:04:29'),
(9, 'Data Base', '2022-05-07 07:50:04', '2022-05-18 08:45:36'),
(10, 'No-code development', '2022-05-07 07:53:34', '2022-05-07 14:02:39');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `cat_id`, `trainer_id`, `name`, `small_desc`, `desc`, `price`, `img`, `created_at`, `updated_at`) VALUES
(1, 10, 4, 'Portfolio : Wordpress Website in Elementor 2020', 'Learn how to create a designers portfolio website with Elementor from an Adobe Xd design', 'Is it possible to built a website as a complete beginner without any experience?\r\n\r\nThe problem\r\nThe problem with creating websites is that there are so many elements you need to understand. There is the design part and the technical part that you will need to understand to make it work. This is the reason why most people don\'t even start with their first website.\r\n\r\n\r\nWhat is the solution?\r\nLuckily times have changed and things are becoming easier these days. Nowadays, it\'s possible to create a website using a drag and drop system that is usable for all skill levels. The only thing you have to do is prepare a few things in Wordpress and spend a few hours watching the course. Then you will know all you need to create a basic website.\r\n\r\n\r\nIs it really free?\r\nIn this course I will only use free tools to build all the pages. The only thing that you can pay for is your own domain-name. If you already have on then you can skip this step and if you don\'t have one yet then I will show you how to acquire one.\r\n\r\n\r\nThe opportunity\r\nLearning how to create websites comes with huge opportunities. You will be able to create your own website (like I do in this course) or create websites for other people or businesses. This makes website creation a hugely profitable skill. Companies are willing to spend thousands of dollars for each website.\r\n\r\n\r\nWhy is this course different?\r\nThis is where I think I can stand out. Because most courses just use templates that they didn\'t design themselves. This means that they can create the pages fast, but it won\'t stand in the real world. In the real world you will often times get a design from somebody else (or better: create your own) which you need to transform. If you don\'t know how to do this in a pixel perfect way, you will probably not get a lot of work. Then you just know the \"tricks\", but not the real work. That\'s why I focus on the real deal in this course.\r\n\r\n\r\nStep by step\r\nIn this course we are not going to rush and make a quick website without thinking about what we are creating. There is enough of that on the internet. I am going to show you a real project where I\'m going to transform an Adobe XD design into a real website. This means that I will show you all the steps, from the first title to the last button.\r\n\r\nOnce we progress in the course (and you\'ve seen the same techniques over and over) we will slowly start increasing the speed so will also be able to speed up your skills by watching this course.', 66, '1651953184.jpg', '2022-05-01 23:20:15', '2022-05-08 08:15:59'),
(2, 7, 5, 'Android N Développement 2017', 'Learn how to develop Android apps by planning 3 working apps', 'Do you want to develop your own Android applications or start a new career?\r\nThis course is for you.\r\n\r\nIn this training of more than 13 hours , you will learn the basics of Java programming for Android and we will create together and step by step 3 functional applications .\r\n\r\nThe course format is based on a practical approach and for each of the topics covered you will find:\r\n\r\nAn introduction to the subject\r\n\r\nA “live” demonstration\r\n\r\nA practice exercise and the solution\r\n\r\nA summary\r\n\r\nWe will create together 3 applications that you can add to your portfolio and proudly present to your future employers and friends to show off your new skills.\r\n\r\nApplication 1: Games for Two.\r\nThe player who presses his button 10 times the fastest wins the duel.\r\nApp 2: Twitter Clone.\r\nBrowse different timelines of your choice, send Tweets and more.\r\nApplication 3: Weather.\r\nThe climate in an interactive way wherever you are.\r\nThe development of these applications is of an accessible level and will allow you to learn the essential functionalities to then program any application .', 51, '1651952717.png', '2022-05-01 23:20:15', '2022-05-07 17:46:59'),
(3, 7, 5, 'React Native (+ Redux & Hooks)', 'From beginner to advanced: develop and publish applications with React Native, React Navigation and Redux!', 'React Native has become in a few years an essential framework in the development of mobile applications . Based on React, which is enriched every year with new innovative and powerful concepts, React Native allows front-end developers to publish native Android and iOS applications with Javascript.\r\n\r\nAt the end of this course, you will have developed several applications and you will know how to publish them on the App Store and Play Store . The difficulty of the concepts will be gradual: we will start with basic concepts to end with the development of an application making Http requests to an API.\r\n\r\nIf you\'re new to React, don\'t panic! We will see together the basic concepts of React. You will learn everything you need to know about React to get started with React Native.\r\n\r\nWe will see in detail how to apply style to our applications. Once the basics have been acquired, we will develop a first simple application to fully understand theoretical concepts.\r\n\r\nWe will then use Redux to manage the state of our application . And we will see why this library is used so much in the React ecosystem.\r\n\r\nThrough the development of the recipe list application, we will see in detail how to develop a more complex application.\r\n\r\nYou can also contact me to ask any questions you want. Everyone is different and I understand very well that some passages can be complex. So do not hesitate to write to me!', 66, '1651951698.jpg', '2022-05-01 23:20:15', '2022-05-08 08:51:02'),
(4, 8, 3, 'C# Developer | Complete training 2022', 'Learn programming with the latest C# 10 language and build powerful web apps with .NET Core 6', 'Vous débutez en programmation ? ou bien vous souhaitez vous améliorer ?\r\nCette formation complète sur le langage C# vous permettra :\r\n\r\n✅ D\'apprendre la programmation en partant de 0\r\n\r\n✅ D\'obtenir des bases solides en programmation\r\n\r\n✅ D\'avoir les bonnes pratiques en programmation (prendre les bonnes habitudes et coder proprement)\r\n\r\n✅ De savoir développer des algorithmes\r\n\r\n✅ D\'apprendre tous les concepts de la programmation orientée objet.\r\n\r\n✅ D\'apprendre le langage C# dans tous ses recoins : les fonctions asynchrones (async/await), les delegates...\r\n\r\n=> Il s\'agit de la seule formation vous proposant d\'apprendre le langage C# avec les toutes dernières versions de Microsoft pour cette année 2022:\r\n\r\n- C# version 10\r\n- Framework .NET 6 (le tout dernier framework de Microsoft sorti en novembre 2021).\r\n\r\nEnvie d\'aller encore plus loin ?\r\nDans cette formation (de plus de 20 heures de contenu vidéo) vous apprendrez aussi le développement WEB en partant de 0, et vous allez créer des applications web dynamiques et puissantes avec .NET Core.\r\nVous allez apprendre:\r\n\r\n✅ La base du développement web avec les langages HTML5 et CSS3 (aucun pré-requis nécéssaire)\r\n\r\n✅ A créer des sites web avec un responsive design (qui s\'adaptent à toutes tailles d\'écran)\r\n\r\n✅ A créer des applications web dynamiques avec .NET Core 6\r\n\r\n✅ A utiliser les nouvelles fonctionnalités de .NET 6 comme le \"HOT RELOAD\" pour développer plus vite.\r\n\r\n✅ A manipuler des bases de données (SQLite, MS SQL Serveur)\r\n\r\n✅ A créer une interface d\'administration protégée par mot de passe (authentification)\r\n\r\n✅ A développer une API REST, qui vous permettra de partager les données de votre serveur avec d\'autres applications (notamment une application mobile iOS Android avec Xamarin)\r\n\r\n✅ A publier gratuitement votre projet sur le cloud Microsoft Azure.', 66, '1651951665.jpg', '2022-05-01 23:20:16', '2022-05-07 17:27:46'),
(5, 9, 4, 'MySQL Database Admin -DBA for Beginners', 'Learn Practical Hands-on MySQL DBA Skills', 'The MySQL is the world\'s most popular open source database.\r\n\r\nThis course will teach you a lot to start using this incredibly popular MySQL database and gain useful skills in the process. In learning about MySQL you will also gain an understanding of relational databases in general. Furthermore, you will harness that power by learning SQL and using it to build databases, populate them with data and query that data through extensive hands-on practices.\r\n\r\nYou will learn how to use the MySQL Workbench which is a very powerful administrative tool that contains a lot of useful features that will enable you perform various administrative tasks on MySQL Server installations.', 62, '1651951076.jpg', '2022-05-01 23:20:16', '2022-05-07 17:17:56'),
(15, 10, 5, 'WORDPRESS The Complete Course 20 COURSES IN 1', '35 hours of videos to create a successful site! BONUS: SEO, Photoshop, Mailchimp, Facebook, Instagram, Google, LinkedIn', 'Master and familiarize yourself with one of the most popular CMS with the most complete course and elected \"best seller\" on Udemy 2 years in a row!!\r\n\r\nWhether you are a beginner or an experienced user, this WordPress training adapts to all your needs, whether personal or professional. You will have lessons with lifetime access without forgetting that it is satisfied or refunded for 30 days.\r\n\r\nThanks to these courses, you will discover the very first beginnings of this simple, easy and powerful CMS which will then give you the ability to set up your website from start to finish, not to mention that you will learn how to develop at the same time new features to make your site a unique and efficient platform and all this apart from digital marketing.\r\n\r\nBy combining digital marketing and WordPress, it would be easy for you to improve the visibility and traffic of your site and your presence on social networks in order to develop and retain your customers. Over the course of the sessions, I will talk to you about how to create your company\'s website, identify the tools on which to base your strategy, apply the methods allowing you to be found, create a dynamic around your brand identity, so that your client becomes an ambassador for your brand and, finally, analyze, readjust and optimize your actions.', 88, '1651951628.jpg', '2022-05-01 23:20:17', '2022-05-07 17:27:08'),
(17, 9, 23, 'Manipulate MongoDB with Python', 'Use python to manipulate MongoDB databases, use case with a Flask application', 'If you want to learn how to manipulate a mongoDB database with the Python language, this course is for you.\r\n\r\nIf you have no basics in python, this course is still for you because it includes a section to introduce you to Python syntax.\r\n\r\nWhy this course?\r\n\r\nPython is a dynamic and interactive object-oriented language .\r\n\r\nIt is defined as a language that is easy to use , to learn , to maintain, and its syntax is simple and readable . More so, it is cross-platform , so it works on Windows, MacOS, Linux, etc. It is both simple and powerful , because it allows you to write very simple scripts, thanks to its many libraries . All this makes it one of the most popular programming languages ​​of the moment. More so, it is the most popular programming language for data analysis and Machine Learning.\r\n\r\nOn the other hand, MongoDB is a document- oriented database management system , which can be distributed over any number of computers and does not require a predefined data schema as in relational databases. It is ideal in the context of Big Data and data analysis in which the massive data to be analyzed is most often unstructured. This flexibility means that like many NoSQL database management systems , MongoDB is widely used in the world of data analysis.\r\n\r\nIn the end, Python and its easy syntax and MongoDB through the Pymongo library , are a good choice for data analysts.\r\n\r\nThis is what we will learn in this course. We will also learn how to do it from a Flask application.', 37, '1652004839.png', '2022-05-08 08:14:01', '2022-05-08 08:48:01'),
(18, 1, 2, 'Photoshop CC 2021 | Tools + Creative Workshops', 'Learn Adobe Photoshop CC 2021: Tools, Photomontages, Photo Editing, Logo, Flyer and Amazing Graphic Creations.', 'Are you struggling to learn Photoshop on your own?\r\nThis course will allow you to use Photoshop professionally. You will be able to add Photoshop to your resume and start getting paid for your Photoshop skills.\r\n\r\nIn this course, I\'ll teach you everything you need to know about the basics of Photoshop .\r\nYou will learn how to use Photoshop for graphic design and Photoshop editing . We will create a large number of projects that you can add to your portfolio for your pleasure or to help you find a new job.\r\n\r\nCarleric: \"I really loved this first course in Photoshop for beginners and with the many creative workshops, it really helps us to get to grips with the different tools of Photoshop.\r\n\r\nI highly recommend this course.\r\n\r\nThank you for this training and I will soon be tackling your second Photoshop training to become a Photoshop expert ^^.\"\r\n\r\nThis course is intended for beginners. You don\'t need any prior knowledge of Photoshop, photography, or design. We will start from the beginning and work together step by step.\r\n\r\nYou\'ll learn Photoshop\'s \"secret sauce\" by which we magically enhance our background and, if necessary, completely remove people from images and more.\r\n\r\nExercise files are available for download so you can follow me in the videos.\r\n\r\nYou go during this Initiation training, learn the basic tools of photoshop and use them through creative workshops, it\'s MY METHOD and you\'ll see it changes everything ...\r\n\r\nClaude: \"Perfect for a refresher or an apprenticeship! exceptionally clear and above all very pleasant to follow, lively and never any hesitation in the explanations! bravo!\r\n\r\nlooking forward to level 2 ;)\"\r\n\r\nIf you\'ve never opened Photoshop before or if you\'ve already opened Photoshop and are struggling with the basics, follow me and together we\'ll learn how to create beautiful images using Photoshop.', 87, '1652007754.jpg', '2022-05-08 09:02:36', '2022-05-08 09:11:56'),
(19, 1, 3, 'Learn Node.js & Create a REST API from A to Z!', 'Learn to develop with Node js, and to create complete APIs using Express, MySQL, etc...', 'In this course, learn how to create applications with Node.js!\r\n\r\nThis course allows you to learn all the basics of Node.js, understanding the technology and operation , analyzing the module system , learning many NPM -related commands , and even having an interest in ES6/ ES7 !\r\n\r\nDiscover the operation and power of REST APIs!\r\n\r\nREST APIs are the future of websites , more precisely \" web apps \" which are essential for this type of client-server relationship. Many large groups such as PayPal, Microsoft, or LindekIn use REST APIs, moreover: they are developed with Node.js, which allows you to create a complete, scalable, simple and fast API !\r\nThis type of organization is made for the web, because it uses the methods of the HTTP protocol (GET, POST, PUT, DELETE, etc..), if you do not understand all this, do not worry, I explain that quickly in the course, in order to develop as much as possible APIs with Node.\r\n\r\nThis training will allow you to develop with Node.js and know how to create / use a REST API.\r\n\r\nWho is this course for?\r\nAt least beginner JavaScript developer\r\nAt least beginner web developer', 47, '1652008247.png', '2022-05-08 09:10:47', '2022-05-08 09:10:47'),
(20, 8, 22, 'Get started with C++ programming', 'Program applications and algorithms using C++, a powerful language', 'C++ is a language capable of combining several levels of programming. Whether it is procedural programming as for the c language, or object- oriented programming , or even generic programming . This makes C++ a language capable of adapting to both a low-level language and a high-level language. A powerful and fast language .\r\n\r\n\r\nIn this course you will therefore learn to program in each of its processes. Starting of course with the basics of language. This course will give you more than the basics so that you can become C++ experts .\r\n\r\nWho is this course for?\r\nAnyone who wants to learn C++', 24, '1652009188.png', '2022-05-08 09:26:28', '2022-05-08 09:26:28'),
(21, 10, 5, 'AppSheet Training || Advanced UX', 'Level Up your AppSheet Skills - Upgrade your Career', 'The Advanced UX Path will teach its viewers the most valuable interface concepts that will take your app functionality to the next level!\r\n\r\nLearn how to Build:\r\n- Custom Navigation Views\r\n- Dynamic Filtered Search\r\n- Interactive Dashboards\r\n- Charts and Graphs\r\n- Form Pagination and Formatting\r\n\r\nNewly advanced concepts can be learn that will change the data and UX relationship in your app!\r\n\r\nÀ qui ce cours s\'adresse-t-il ?\r\nIntermediate - Advanced users of AppSheet.', 99, '1652009532.png', '2022-05-08 09:32:12', '2022-05-08 09:32:12'),
(22, 9, 23, 'Oracle and SQL Developer Getting Started', 'Essentials on Oracle, SQL, SQL*PLUS, SQL Developer to get started quickly and work with the world\'s #1 DBMS', 'You are required to use the Oracle DBMS as part of a project or your job as a Developer, Designer, Operator, business manager, or even future DBA.\r\n\r\nYou have no experience with the Oracle DBMS, this course is for you.\r\n\r\nTo enable you to get started quickly and be operational, you are going to install an Oracle work environment, a veritable laboratory on your laptop computer. \r\n\r\nBy taking this course you will know:\r\n\r\n- install the Oracle engine, \r\n\r\n- create an Oracle database, \r\n\r\n- connect an Oracle database, and create various database objects for the database \r\n\r\n- stop, start and check the status of the Oracle database\r\n\r\n- and write simple SQL statements that access data from the database.\r\n\r\nWho is this course for?\r\nThis Oracle training is intended for anyone participating in a project around Oracle and who is new to Oracle\r\nApplication Designers and Developers,\r\nFuture Oracle DBAs\r\nOperators working on an Oracle database server,\r\nReporting or analysis officer\r\nProject managers', 65, '1652009915.jpg', '2022-05-08 09:38:36', '2022-05-08 09:38:36'),
(23, 8, 22, 'Professional Java Developer Career Starter: Java Foundations', 'Covers Java 17 & Earlier, Streams/Lambdas, Regex, TDD/Testing, Optionals, JDBC/SQL Intro to Spring & More Using IntelliJ', 'Note: This course is intended for absolute beginners to programming OR those who don\'t mind a slower pace to learning Java. If you\'re looking for a faster-paced course, this may not be for you (though you can play back at 2x speed & may still find great things to learn). Also, even for those who already know some basic Java, you could skip over the parts you already know and focus on those you may not, like Regex, Streams/Lambdas API, Optionals, Date/Time, SQL/Database/JDBC sections that even seasoned Java developers may not know as well as they should. Many of my sections on these APIs are as long or longer than MANY stand-alone courses dedicated to just one of these topics - for similar prices. Check out my preview videos from each of those sections to gauge how deep I go into each topic.\r\n\r\nIf you\'re interested in starting a new career as a professional software developer, learn the fundamentals from an instructor who has interviewed, hired, managed & mentored numerous developers over the years. This course will teach you all the REAL Java skills you need to land your first job and excel. It focuses on skills you\'re actually likely to use most often and tries to de-emphasize more \"academic\" knowledge. The instructor has taken his experiences and observations of both successful and unsuccessful developer candidates to create a course that tries to ensure success in landing highly-coveted developer jobs.\r\n\r\nIn this course, you\'ll learn such topics as:\r\n\r\nObject Oriented Programming (OOP)\r\n\r\nToo many so-called \"Java\" developers have learned the syntax of the language but have no idea how to harness its actual power to write sophisticated software that\'s easier to maintain and collaborate on.\r\n\r\nRegular Expressions\r\n\r\nAnother unfortunate observation is that a majority of Java developers are very weak with Regular Expressions. This is unfortunate because so much of what Java tends to be used for, involves processing text and checking that it is valid or parsing key information out of it. Without the use of Regular Expressions, these tasks require considerable amounts of error-prone code that is inflexible and difficult to maintain.\r\n\r\nFunctional Programming with Lambdas & Streams API\r\n\r\nAnother sore-spot among a large number of Java developers. As of 2021, Java 17 is out, but the Functional programming APIs of Lambdas & Streams were introduced into Java with version 8. We\'ve observed that developers simply aren\'t keeping up with these powerful (not-so-new anymore) techniques that help keep Java competitive and efficient in an increasingly functional programming world. You can sift through large datasets with ease and significantly less code with these APIs.\r\n\r\nOptionals\r\n\r\nTony Hoare, the inventor of the programming concept of \"null\", called its invention his \"billion-dollar mistake\" dating back to 1965. That mistake has gone on to wreak havoc across numerous programming language ever since. Optionals seek to remedy that mistake. Unfortunately, not enough Java developers have learned and embraced the power of using Optionals. This topic seeks to remedy that shortcoming.\r\n\r\nJava 8 Date/Time API\r\n\r\nJava was introduced in 1995 and heralded as the great, shiny new programming language of our time. To a large degree, one could argue that it is indeed, that. However, mistakes were made along the way. One of those mistakes was the way dates & times were handled. Java 8 made major strides in fixing those mistakes, but as with Optionals, Lambdas and many other topics mentioned, not enough developers have taken the time to learn the new and greatly improved Java 8 Date/Time API. We\'ll show you how to keep time the right way.\r\n\r\nWorking with Databases & SQL\r\n\r\nOne of the topics where it seems Java developers actually have kept up (mostly) is in learning modern ways to work with databases in Java - primarily through the use of frameworks like Spring Boot. However, one unfortunate side-effect of the massive levels of abstraction these frameworks afford us, is that many developers have little-to-no idea of what these frameworks are doing or how to use them to maximum effect. We\'ll peel back the covers and give a solid foundation of the basics to better empower developers as they inevitably continue to use frameworks to make this work easier.\r\n\r\nAn Introduction to The Spring Framework & Spring Boot\r\n\r\nThe Spring Framework & its sibling, Spring Boot, have absolutely revolutionized modern Java software development - particularly for business. Dare I say virtually no company doing Java these days, even considers doing it without Spring or at least one of its few and much less popular competitors. You WILL have to learn Spring to be a true and well-rounded Java developer competitive in the job market. Though this course if focused on the fundamentals of Java, we knew we had to whet your appetite for the full(er) stack of Java development. Spring is what most companies use to enable their Java applications to become web applications and web services and talk to databases. This module will set you up for Neutrino\'s upcoming course dedicated to the topic in full (because it deserves its own course).', 79, '1652010547.jpg', '2022-05-08 09:49:08', '2022-05-08 09:49:08'),
(24, 7, 5, 'Xamarin Forms and MvvmCross', 'The complete mobile application development training with Xamarin Forms, C# and MvvmCross', 'Develop mobile applications for Android, iOS and UWP by pooling code and user interfaces...\r\n\r\nThanks to Visual Studio 2019 and Xamarin Forms, you will discover how to create robust, testable and store-deployable mobile applications. You will learn how to use the power of Xamarin Forms to create exceptional GUIs. Using Microsoft\'s C# programming language, you will optimize your code so that it works on all mobile platforms on the market.\r\n\r\n\r\nA complete and detailed support, step by step...\r\n\r\nThis training absolutely covers all the steps necessary to understand and lead to the creation of mobile applications. From setting the prerequisites to publishing your application on the stores (AppStore and PlayStore), you will have access to all the resources and explanations in a structured and hierarchical way. Each module is divided into several sections to facilitate navigation and understanding.\r\n\r\n\r\nDownloadable resources and content as well as Quizzes throughout the learning path...\r\n\r\nEach section contains the downloadable up-to-date project allowing you to target the courses that interest you. In addition, you will be able to validate your knowledge thanks to the quizzes available throughout the course. Each right or wrong answer will send you back to the subject in order to help you in your learning.\r\n\r\n\r\nWhy Xamarin Forms and MvvmCross...\r\n\r\nXamarin.Forms lets you build native mobile, tablet, and desktop apps targeting Android, iOS, UWP, and more. Combined with the power of Microsoft C# and all the tools of Visual Studio (certainly the most powerful code editor on the market), it becomes easy and fast to create, test and deploy robust applications with a professional design.\r\n\r\nMvvmCross is the most widely used and deployed open source cross-platform framework in the mobile ecosystem today. More than 5000 companies use it around the world.\r\n\r\nGuarantees...\r\n\r\nIf, despite all my efforts, you are not satisfied or convinced by this training, then no worries since you have the \"30-day money-back guarantee\".\r\n\r\nIn addition you will have access to the questions / answers of the community of this course. And if that wasn\'t enough, you can ask me your questions directly via the integrated interface.\r\n\r\nSo don\'t wait any longer and join the world of mobile application developers with Xamarin Forms and MvvmCross\r\n\r\nWho is this course for?\r\nAnyone wanting to learn mobile development\r\nDevelopers wanting to discover C# and Xamarin\r\nAnyone wanting to discover Cross-Platform development with MvvmCross', 99, '1652010919.png', '2022-05-08 09:55:19', '2022-05-11 20:47:31'),
(25, 1, 5, 'Angular Crash Course for Busy Developers', 'Have limited time to learn Angular 4 (Angular 2+)? Take this course and learn Angular in 10 hours!', 'Chances are you have heard that Angular developers are in demand these days. And you are here to learn Angular fast. \r\n\r\nThere are tons of great courses out there for learning Angular. But most these courses are more than 20 hours long. If you\'re a busy developer and need to quickly pick up Angular, this is the ideal course for you. \r\n\r\nThis course contains 20 hours of content but you only need to watch the first 10 hours. The other 10 hours are recorded with an earlier version of Angular. You don\'t need to watch those videos. \r\n\r\nSo, in just 10 hours, you can learn all the essential Angular concepts! You can simply dedicate a weekend to this course and by the end of the weekend you\'ll have a good understanding of Angular and you\'ll be able to build real client apps with Angular.', 55, '1652011351.jpg', '2022-05-08 10:02:31', '2022-05-08 10:02:31');

-- --------------------------------------------------------

--
-- Structure de la table `course_student`
--

CREATE TABLE `course_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','approve','reject') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `student_id`, `status`, `created_at`, `updated_at`) VALUES
(30, 1, 1, 'pending', NULL, NULL),
(31, 1, 2, 'pending', NULL, NULL),
(32, 1, 3, 'pending', NULL, NULL),
(33, 1, 4, 'pending', NULL, NULL),
(34, 2, 5, 'pending', NULL, NULL),
(35, 3, 6, 'pending', NULL, NULL),
(36, 2, 1, 'pending', NULL, NULL),
(37, 3, 3, 'pending', NULL, NULL),
(38, 4, 4, 'pending', NULL, NULL),
(39, 5, 5, 'pending', NULL, NULL),
(40, 1, 8, 'pending', NULL, NULL),
(41, 23, 21, 'approve', '2022-05-08 18:39:13', '2022-05-08 18:39:13'),
(42, 2, 21, 'pending', '2022-05-08 18:39:59', '2022-05-08 18:39:59');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'François Rouinko', 'venirdeloin@hotmail.fr', 'test', 'this a test this a test this a test this a test this a test this a test this a test this a test this a test this a test this a test .\r\nthis a test this a test this a test this a test this a test this a test this a test this a test this a test this a test th.\r\nthis a test this a test this a test this a test this a test this a test \r\nthis a test this a test this a test this a test this a test this a test this a test this a test this', '2022-05-08 12:39:23', '2022-05-08 12:39:23'),
(7, 'Mourad ennagi', 'nngg@hotmail.fr', 'test', 'this a test this a test this a test this a test this a test this a test this a test this a test this a test this a test this a test .\r\nthis a test this a test this a test this a test this a test this a test this a test this a test this a test this a test th.\r\nthis a test this a test this a test this a test this a test this a test \r\nthis a test this a test this a test this a test this a test this a test this a test this a test this', '2022-05-08 12:40:13', '2022-05-08 12:40:13'),
(8, 'BlaBla bla', 'bla@hotmail.fr', 'test', 'blabla', '2022-05-08 12:44:18', '2022-05-08 12:44:18');

-- --------------------------------------------------------

--
-- Structure de la table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'venirdeloin@hotmail.fr', '2022-05-02 13:02:27', '2022-05-02 13:02:27'),
(4, 'admin@gmail.com', '2022-05-09 18:51:52', '2022-05-09 18:51:52');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `name`, `title`, `subtitle`, `desc`, `logo`, `favicon`, `background`, `city`, `adresse`, `phone`, `work_hours`, `email`, `map`, `site`, `fb`, `twiter`, `insta`, `created_at`, `updated_at`) VALUES
(1, 'IT Learning', 'IT Learning', 'Online Course Registration', 'IT Learning, The higher education Campus integrated since 2005 within the FST – Settat and dedicated to training and certification in the fields of new technologies and information systems.', 'logo.png', 'favicon.png', 'background.png', 'Casa ,Morocco', 'Centre IGATE, 39, Rue Omar Slaoui, Plateau Taoufik', '0600000011', 'Saturday To Sunday 9am to 4pm', 'contact-dev@itlearning-campus.org', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6647.219529815999!2d-7.619333!3d33.58948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7765da4441d92fa6!2sIGATE%204!5e0!3m2!1sen!2sma!4v1651695628814!5m2!1sen!2sma\" width=\"1000\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://learningacademy.com', 'https://www.facebook.com/ITLC.FSTS', '#', '#', '2022-05-02 01:19:11', '2022-05-19 16:29:51');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `spec`, `created_at`, `updated_at`) VALUES
(1, 'Dris Fathi', 'benjamin.koepp@example.net', NULL, '2022-05-01 23:15:47', '2022-05-01 23:15:47'),
(2, 'Mouna Ibrahimi', 'reece70@example.com', '.net developer', '2022-05-01 23:15:48', '2022-05-08 10:14:02'),
(3, 'Fouad Doukkali', 'raul48@example.com', NULL, '2022-05-01 23:15:48', '2022-05-01 23:15:48'),
(4, 'Fatima Assri', 'jon28@example.org', 'full-stack', '2022-05-01 23:15:48', '2022-05-08 10:13:44'),
(5, 'Souad BenKhali', 'hudson.nayeli@example.com', NULL, '2022-05-01 23:15:48', '2022-05-01 23:15:48'),
(6, 'Mustapha Keslan', 'kristin.ohara@example.net', 'database administrator', '2022-05-01 23:15:48', '2022-05-08 10:13:16'),
(7, 'Tareq Nagi', 'evan80@example.net', 'webdesigner', '2022-05-01 23:15:48', '2022-05-08 10:12:29'),
(8, 'Ghita benFahd', 'baron.schiller@example.com', 'back-end', '2022-05-01 23:15:48', '2022-05-08 10:12:11'),
(9, 'Karima Mouradi', 'ckshlerin@example.com', 'front-end', '2022-05-01 23:15:48', '2022-05-08 10:11:53'),
(10, 'Selma Yakine', 'polly.schaden@example.com', 'ui design', '2022-05-01 23:15:48', '2022-05-08 10:11:07'),
(21, 'oumaima', 'elobayidoumaima@gmail.com', 'front-end', '2022-05-08 18:39:13', '2022-05-11 19:36:18');

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`id`, `name`, `spec`, `desc`, `img`, `created_at`, `updated_at`) VALUES
(8, 'Tasnim farsi', 'Frontend', 'I just want to say that this school helps me learn a lot of things this year. I get a lot of help with the subjects if I need help.', '1.png', '2022-05-01 23:57:48', '2022-05-01 23:57:48'),
(9, 'saif alami', 'Web designer', 'It learning is a great school! The teachers here are super about encouraging students to do their very best', '2.png', '2022-05-01 23:59:02', '2022-05-01 23:59:02'),
(10, 'Kenza Mouran', 'Fullstack', 'IT learning is a great school to attend. You learn things at this school. it’s very strict here. I believe this school provides the best education', '3.png', '2022-05-02 00:00:56', '2022-05-02 00:00:56'),
(11, 'jawhar lemrissi ', 'Backend', 'I just want to say that this school helps me learn a lot of things this year. I get a lot of help with the subjects if I need help.', '4.png', '2022-05-02 00:00:56', '2022-05-02 00:00:56'),
(12, 'Omar Ibrahimi', 'Web developer\r\n', 'IT learning is a great school to attend. You learn things at this school. it’s very strict here. I believe this school provides the best education', '5.png', '2022-05-02 00:00:56', '2022-05-02 00:00:56'),
(13, 'sahar elwardi', 'Ui designer', 'You learn things at this school. It is fun but it’s very strict here. I believe this school provides the best education', '6.png', '2022-05-02 00:00:56', '2022-05-02 00:00:56');

-- --------------------------------------------------------

--
-- Structure de la table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `phone`, `spec`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Fouad Ibrahimi', '0600000000', 'Web Integrator', '1652301297.png', '2022-05-01 22:33:49', '2022-05-11 19:34:57'),
(2, 'Fatima Gemran', '0600000000', 'webdesigner', '1652301260.jpg', '2022-05-01 22:33:49', '2022-05-11 19:34:20'),
(3, 'Said Bairouni', '0600000000', 'full-stack', '3.png', '2022-05-01 22:33:49', '2022-05-07 12:30:40'),
(4, 'Mounir Kermad', '0600000000', 'back-end', '1651933402.png', '2022-05-01 22:33:49', '2022-05-07 12:28:52'),
(5, 'samir kacimi', '0600000000', 'front-end', '1651950227.png', '2022-05-01 22:33:49', '2022-05-11 19:26:34'),
(22, 'najlaa fekari', '0700000000', '.net developer', '1652006661.png', '2022-05-08 08:44:22', '2022-05-11 19:25:59'),
(23, 'Adam alami', '0600000011', 'database administrator', '1652006853.png', '2022-05-08 08:47:33', '2022-05-17 22:32:34');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_cat_id_foreign` (`cat_id`),
  ADD KEY `courses_trainer_id_foreign` (`trainer_id`);

--
-- Index pour la table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_course_id_foreign` (`course_id`),
  ADD KEY `course_student_student_id_foreign` (`student_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
