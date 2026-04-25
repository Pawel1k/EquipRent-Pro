<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EquipRent Pro - Logowanie</title>
<style>
    .footer {
  background: #eef1f4;
  padding: 60px 80px 30px;
  font-family: Arial, sans-serif;
  color: #6b7280;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  gap: 60px;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-col {
  max-width: 300px;
}

.footer-col h3 {
  font-size: 18px;
  color: #111827;
  margin-bottom: 20px;
}

.footer-col h4 {
  font-size: 12px;
  letter-spacing: 2px;
  color: #9ca3af;
  margin-bottom: 15px;
}

.footer-col p {
  font-size: 13px;
  line-height: 1.6;
}

.footer-col ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-col ul li {
  margin-bottom: 10px;
}

.footer-col ul li a {
  text-decoration: none;
  color: #6b7280;
  font-size: 13px;
}

.footer-col ul li a:hover {
  color: #111827;
}

.footer-bottom {
  border-top: 1px solid #d1d5db;
  margin-top: 50px;
  padding-top: 20px;
  display: flex;
  gap: 30px;
  font-size: 12px;
}

.footer-bottom a {
  text-decoration: none;
  color: #9ca3af;
}

.footer-bottom a:hover {
  color: #111827;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    gap: 40px;
  }
}
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f2f4f7;
    }

    .container {
        display: flex;
        max-width: 1100px;
        margin: 60px auto;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .left {
        width: 50%;
        background: linear-gradient(135deg, #eef2f7, #dfe6ee);
        padding: 40px;
    }

    .left h1 {
        font-size: 28px;
        margin-top: 20px;
        color: #333;
    }

    .left small {
        color: #777;
    }

    .right {
        width: 50%;
        padding: 40px;
    }

    .right h2 {
        margin-bottom: 5px;
    }

    .right p {
        color: #777;
        margin-bottom: 25px;
    }

    label {
        font-size: 12px;
        color: #666;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 8px 0 20px;
        border: 1px solid #ddd;
        border-radius: 6px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        margin-bottom: 20px;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #0d5c8b;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
    }

    button:hover {
        background: #0b4d73;
    }

    .secondary-btn {
        margin-top: 15px;
        background: #e6ecf2;
        color: #333;
    }

    footer {
        text-align: center;
        font-size: 12px;
        color: #999;
        margin-top: 30px;
    }

</style>
</head>
<body>

<div class="container">
    <div class="left">
        <small>EquipRent Pro</small>
        <h1>Precyzyjne zarządzanie<br>sprzętem sportowym.</h1>
        <p><small>Rok założenia 2024</small></p>
    </div>

    <div class="right">
        <h2>Witaj ponownie</h2>
        <p>Wprowadź swoje dane.</p>

        <form>
            <label>Adres e-mail</label>
            <input type="email" placeholder="nazwisko@firma.pl">

            <label>Hasło</label>
            <input type="password" placeholder="••••••••">

            <div class="row">
                <label><input type="checkbox"> Zapamiętaj mnie</label>
                <a href="#">Zapomniałeś hasła?</a>
            </div>

            <button type="submit">Zaloguj się →</button>
            <button type="button" class="secondary-btn">Załóż konto klienta</button>
        </form>
    </div>
</div>

<footer class="footer">
        © 2024 EquipRent Pro • System ewidencji przemysłowej
  <div class="footer-container">
    
    <div class="footer-col">
      <h3>EQUIPRENT PRO</h3>
      <p>
        zarządzanie wysokowydajnym sprzętem sportowym, 
        standaryzowane rozwiązania wynajmu dla 
        profesjonalnych projektów i zawodów.
      </p>
    </div>

    <div class="footer-col">
      <h4>FLOTA SPRZĘTU</h4>
      <ul>
        <li><a href="#">Rowery MTB</a></li>
        <li><a href="#">Rowery szosowe</a></li>
        <li><a href="#">E-bikes</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>FIRMA</h4>
      <ul>
        <li><a href="#">O nas</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <a href="#">Polityka bezpieczeństwa</a>
    <a href="#">Regulamin</a>
  </div>
</footer>
</body>
</html>
