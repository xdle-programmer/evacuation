@extends('templates.main')

@section('content')

    <div class="main-screen">
        <div class="main-screen__block layout layout--small">
            <div class="main-screen__title">Эвакуация в Болгарию</div>
            <div class="main-screen__text">Бесплатное проживание и трех-разовое питание. Эвакуация по <a target="_blank"
                                                                                                         href="https://ukraine.gov.bg/ua/your-legal-status/">государственной
                    программе Болгарии</a> для беженцев из Украины.
            </div>
        </div>
    </div>

    <div class="about">
        <div class="about__block layout">
            <div class="about__text">Шановні українці, є змога скористатися державною програмою, яку впровадила Болгарія
                для українців, які шукають тимчасового прихистку. Надається безкоштовне проживання в готелі 4 зірки,
                біля моря, та 3-х разове харчування. На данний момент програма працює до 31.05.
            </div>
            <div class="about__text">Пропонуємо: транспорт, супровід до готелю, зустріч в Болгарії, допомога з
                поселенням та допомога під час перебування в Болгарії.
            </div>
            <div class="about__text">Хочемо щоб Ви почули нас. Наша задача, це відповісти на всі питання, які вас
                хвилюють, допомогти в транспортуванні, поселенні та реєстрації і в подальшому освоїтись в умовах іншої
                держави. Кожна людина має, окремо для себе, розглянути, вивчити всю інформацію та прийняти особисте
                рішення.
            </div>
        </div>
    </div>

    <div class="price">
        <div class="price__block layout">
            <div class="price__title">Стоимость:</div>
            <div class="price__item">
            Проживание и трех-разовое питание: <strong>бесплатно</strong>. Транспорт, супровід до готелю, зустріч в Болгарії, допомога з
            поселенням та допомога під час перебування в Болгарії: <strong>70 евро + 950 гривен предоплата</strong>.
            </div>
        </div>
    </div>

    <div class="buses">
        <div class="buses__block layout">
            <div class="buses__title">Автобусы</div>
            <div class="buses__items">
                <div class="buses__item">
                    <div class="buses__item-date">01.04</div>
                    <div class="buses__item-count">49 мест</div>
                    <div class="buses__departures">
                        <div class="buses__departure">Київ</div>
                        <div class="buses__departure">Біла Церква</div>
                        <div class="buses__departure">Вінниця</div>
                        <div class="buses__departure">Хмельницький</div>
                        <div class="buses__departure">Тернопіль</div>
                        <div class="buses__departure">Івано-Франківськ</div>
                        <div class="buses__departure">Чернівці</div>
                        <div class="buses__departure">Львів</div>
                        <div class="buses__departure">Кам'янець Подільський</div>
                        <div class="buses__departure">Коломия</div>
                        <div class="buses__departure">Рогатин</div>
                    </div>
                    <div class="buses__item-hotels">
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Супер отель спа резорт бич</div>
                            <div class="buses__item-hotel-location">Золотые пески</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Супер отель спа резорт бич</div>
                            <div class="buses__item-hotel-location">Золотые пески</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Супер отель спа резорт бич</div>
                            <div class="buses__item-hotel-location">Золотые пески</div>
                        </div>
                    </div>
                </div>

                <div class="buses__item">
                    <div class="buses__item-date">05.04</div>
                    <div class="buses__item-count">49 мест</div>
                    <div class="buses__departures">
                        <div class="buses__departure">Київ</div>
                        <div class="buses__departure">Біла Церква</div>
                        <div class="buses__departure">Вінниця</div>
                        <div class="buses__departure">Хмельницький</div>
                        <div class="buses__departure">Тернопіль</div>
                        <div class="buses__departure">Івано-Франківськ</div>
                        <div class="buses__departure">Чернівці</div>
                        <div class="buses__departure">Львів</div>
                        <div class="buses__departure">Кам'янець Подільський</div>
                        <div class="buses__departure">Коломия</div>
                        <div class="buses__departure">Рогатин</div>
                    </div>
                    <div class="buses__item-hotels">
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Супер отель спа резорт бич</div>
                            <div class="buses__item-hotel-location">Золотые пески</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Супер отель спа резорт бич</div>
                            <div class="buses__item-hotel-location">Золотые пески</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Супер отель спа резорт бич</div>
                            <div class="buses__item-hotel-location">Золотые пески</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hotels">
        <div class="hotels__block layout">
            <div class="hotels__title">Отели</div>
            <div class="hotels__items">
                <div class="hotels__item">
                    <div class="hotels__item-name">Отель Бич Спа Резорт</div>
                    <div class="hotels__item-title">4 звезды, Золотые пески, 2 километра от моря</div>
                    <img class="hotels__item-img" src="/public/images/temp/hotel.jpg">
                </div>

                <div class="hotels__item">
                    <div class="hotels__item-name">Отель Бич Спа Резорт</div>
                    <div class="hotels__item-title">4 звезды, Золотые пески, 2 километра от моря</div>
                    <img class="hotels__item-img" src="/public/images/temp/hotel.jpg">
                </div>

                <div class="hotels__item">
                    <div class="hotels__item-name">Отель Бич Спа Резорт</div>
                    <div class="hotels__item-title">4 звезды, Золотые пески, 2 километра от моря</div>
                    <img class="hotels__item-img" src="/public/images/temp/hotel.jpg">
                </div>

                <div class="hotels__item">
                    <div class="hotels__item-name">Отель Бич Спа Резорт</div>
                    <div class="hotels__item-title">4 звезды, Золотые пески, 2 километра от моря</div>
                    <img class="hotels__item-img" src="/public/images/temp/hotel.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="form__block layout">
            <a target="_blank" href="https://forms.gle/H8rSUwsF7injQaQH6" class="form__button">Зареєструватись</a>
        </div>
    </div>

    <div class="faq">
        <div class="faq__block layout">

            <div class="faq__title">Вопросы</div>

            <div class="faq__items">
                <div class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Можно ли с животными?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">Можно, но только до 5 килограммов</div>
                </div>
                <div class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Как много времени займет дорога?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">Дорога займет очень много времени, 30-40 часов. На границе будет
                        возможность купить бутерброды и будет чай
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Можно ли выбрать двухместное расселение?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">Нет, все расселения 3-х и 4-х местные</div>
                </div>
            </div>
        </div>
    </div>

@endsection
