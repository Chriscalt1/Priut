import React from 'react'

export default function Header() {
  return (
    <header>
    <div class="container">
        <div class="container">
            <div id="branding">
                <h1><img src={"./resources/images/logo.png"} 
                        class='logo'></img> Усы, лапы и хвосты</h1> 
            </div>
        <nav>
            <ul>
                <li class="current"><a href="index.html">О нас</a></li>
                <li><a href="animalcards.html">Хвостики</a></li>
                <li><a href="vet.html">Ветеринарные клиники</a></li>
                <li><a href="blog.html">Блог</a></li>
                <li><a href="contacts.html">Контакты</a></li>
                <li><a href="help.html">Как нам помочь</a></li>
            </ul>
        </nav>
    </div>
    </div>
</header>
  )
}
