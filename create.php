<?php require('header.html');?>


            <form action="Keri.php" method="POST">

 <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">+_+</span>
  <input input name="first_name" type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input name="name" type="text" class="form-control" placeholder="Эллектронная почта" aria-label="Имя пользователя получателя" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">!send message only google users!</span>
</div>

<label for="basic-url" class="form-label">введите вашу почту</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Введите комментарий</span>
  <input input name="last_name" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <span class="input-group-text"></span>
  <input input name="phone" type="text" class="form-control" placeholder="please use only phone number Russian Federation(+7)"  aria-label="Имя пользователя">
  <span class="input-group-text">введите ваш номер телефона</span>
</div>

<div class="input-group mb-3">
  <input input name="email" type="text" class="form-control" placeholder="ваш юзернейм на сайте"  aria-label="Имя пользователя">
  <span class="input-group-text">@</span>
  <input input name="adress" type="text" class="form-control" placeholder="через какую платформу вы к нам заходли?" aria-label="Сервер">
</div>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<button class="btn btn-illuminated">продолжить</button>

<style>
.btn-illuminated {
  position: relative;
  padding: 15px 40px;
  font-size: 1.4rem;
  font-weight: bold;
  color: #fff;
  background: linear-gradient(135deg, #45008fff, #ff9900ff);
  border: none;
  border-radius: 12px;
  cursor: pointer;
  overflow: hidden;
  box-shadow: 0 8px 20px rgba(0,0,0,0.3);
  transition: all 0.3s ease;
}

.btn-illuminated::before,
.btn-illuminated::after {
  content: "";
  position: absolute;
  border-radius: 50%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.6s ease;
}

.btn-illuminated::before {
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(235, 173, 116, 1);
  transform: translate(-50%, -50%) scale(1);
}

.btn-illuminated::after {
  top: 50%;
  left: 50%;
  width: 300%;
  height: 300%;
  background: radial-gradient(circle, rgba(0, 245, 53, 1) 0%, transparent 70%);
  transform: translate(-50%, -50%) scale(0);
}

.btn-illuminated:active {
  transform: translateY(4px) scale(0.98);
  box-shadow: 0 4px 10px rgba(255, 0, 0, 0.77);
}

.btn-illuminated:active::before {
  width: 200%;
  height: 200%;
  opacity: 1;
  transform: translate(-50%,
<?php require('footer.html');?>

