<h1>Application Web</h1>


<h3>Links : </h3>

[`Icons website`](https://www.flaticon.com/fr/uicons/interface-icons) 

[`Github Repo link`](https://github.com/Ha-lm31/App-traffic)

<h3>Upload to github</h3>

Dans terminal du dossier `app-traffic` :
```
git status
git add .
git commit -m "st commit"
git push -u origin main --force
```



/*Pour `haut` et `bas` */
/* Barre de navigation */
.haut2 {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  z-index: 1000;
}
/* Liste horizontale */
.list2 {
  display: flex;
  margin: 0;
  padding: 0;
  list-style: none;
  justify-content: space-around;
  align-items: center;
}
/* Chaque élément */
.list2 li {
  flex: 1;
  text-align: center;
}
/* Liens (entourent les icônes) */
.list2 a {
  display: block;
  padding: 10px 0;
  text-decoration: none;
  color: #333;
  transition: background-color 0.3s, color 0.3s;
}
/* Icônes */
.list2 i {
  font-size: 24px;
}
/* Effet survol */
.list2 a:hover {
  background-color: #f0f0f0;
  color: #000;
}
/* Page active */
.list2 a.active {
  background-color: #007bff;
  color: #fff;
}
/* Logo (premier élément) */
.list2 li img {
  vertical-align: middle;
}
footer {
  background: #222;
  color: white;
  text-align: center;
  padding: 15px 10px;
  position: fixed;   /* Fixe le footer */
  bottom: 0;        /* Collé en bas */
  left: 0;
  width: 100%;      /* Prend toute la largeur */
}
footer .socials {
  list-style: none;
  padding: 0;
  margin: 10px 0 0 0;
  display: flex;
  justify-content: center;
  gap: 15px;
}
footer .socials li a {
  color: white;
  font-size: 20px;
  text-decoration: none;
  transition: 0.3s;
}
footer .socials li a:hover {
  color: #1e90ff;
}