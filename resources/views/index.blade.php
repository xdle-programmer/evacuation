@extends('templates.main')

@section('content')

    <div class="main-screen">
        <div class="main-screen__block layout layout--small">
            <div class="main-screen__title">Евакуація до Болгарії</div>
            <div class="main-screen__text">Програма підтримки від Болгарії: <strong>безкоштовне проживання</strong> на
                час війни в готелі 4 зірки, біля моря, та <strong>безкоштовне триразове харчування</strong></div>
            <a href="tel:+380972141648" class="main-screen__phone">+38-097-214-16-48</a>

            <div class="main-screen__social">
                @include('components.social')
            </div>

        </div>
    </div>

    <div class="about">
        <div class="about__block layout">
            <div class="about__text">Шановні українці, є змога скористатися державною програмою, яку впровадила Болгарія
                для українців, які шукають тимчасового прихистку.
            </div>
            <div class="about__text">За програмою <strong>надається безкоштовне проживання в готелі 4 зірки, біля моря,
                    та триразове харчування. На данний момент програма діє до 31.05.</strong></div>
            <div class="about__text">Ми організовуємо проїзд, супровід до готелю, зустріч в Болгарії, допомогу з
                поселенням та під час перебування в Болгарії.
            </div>
            <div class="about__text">З огляду на ситуацію, дана програма чудово підійде для родин з дітьми, жінок, які
                мають змогу віддалено працювати, або тимчасово вільні від роботи та літніх людей, які почувають себе
                достатньо добре, щоб витримати автобусний переїзд.
            </div>
        </div>
    </div>

    <div class="price">
        <div class="price__block layout">
            <div class="price__title">Вартість:</div>
            <div class="price__item">
                Проживання та триразове харчування: <strong>безкоштовно</strong>.
                Транспорт, супровід до готелю, зустріч в Болгарії, допомога з поселенням та допомога під час перебування
                в Болгарії: <strong>60 евро + 1000 гривень передоплата</strong>.
                <br>
                <strong>*</strong> З Одеси: <strong>50 євро + 1000 гривень передоплата</strong>
            </div>
        </div>
    </div>

    <div class="buses">
        <div class="buses__block layout">
            <div class="buses__title">Автобуси</div>
            <div class="buses__items">
                <div class="buses__item buses__item--closed">
                    <div class="buses__item-date">01.04</div>

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
                            <div class="buses__item-hotel-name">Престиж Делюкс</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Готель Хеліос Спа</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                    </div>
                </div>

                <div class="buses__item buses__item--closed">
                    <div class="buses__item-date">05.04</div>

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
                            <div class="buses__item-hotel-name">Престиж Делюкс</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Готель Хеліос Спа</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                    </div>
                </div>

                <div class="buses__item">
                    <div class="buses__item-date">08.04</div>

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
                            <div class="buses__item-hotel-name">Престиж Делюкс</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Готель Хеліос Спа</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                    </div>
                </div>

                <div class="buses__item">
                    <div class="buses__item-date">12.04</div>

                    <div class="buses__departures">
                        <div class="buses__departure">Одеса</div>
                    </div>
                    <div class="buses__item-hotels">
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Royal Park</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Кристал</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                    </div>
                </div>

                <div class="buses__item">
                    <div class="buses__item-date">12.04</div>

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
                            <div class="buses__item-hotel-name">Royal Park</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Кристал</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                    </div>
                </div>

                <div class="buses__item">
                    <div class="buses__item-date">15.04</div>

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
                            <div class="buses__item-hotel-name">Royal Park</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                        <div class="buses__item-hotel">
                            <div class="buses__item-hotel-name">Кристал</div>
                            <div class="buses__item-hotel-location">Золоті Піски</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hotels">
        <div class="hotels__block layout">
            <div class="hotels__title">Готелі</div>
            <div class="hotels__items">
                <div class="hotels__item">
                    <a target="_blank" href="https://www.booking.com/hotel/bg/mak.uk.html" class="hotels__item-name">Престиж
                        Делюкс</a>
                    <div class="hotels__item-title">4 зірки, Золоті Піски</div>
                    <img class="hotels__item-img" src="/public/images/hotels/prestige.jpg">
                </div>

                <div class="hotels__item">
                    <a target="_blank" href="https://www.booking.com/hotel/bg/helios-spa-resort.uk.html"
                       class="hotels__item-name">Хеліос Спа</a>
                    <div class="hotels__item-title">4 зірки, Золоті Піски</div>
                    <img class="hotels__item-img" src="/public/images/hotels/helios.jpg">
                </div>

                <div class="hotels__item">
                    <a target="_blank" href="https://www.booking.com/hotel/bg/royal-golden-sands.uk.html"
                       class="hotels__item-name">Роял Парк</a>
                    <div class="hotels__item-title">4 зірки, Золоті Піски</div>
                    <img class="hotels__item-img" src="/public/images/hotels/royal.jpg">
                </div>

                <div class="hotels__item">
                    <a target="_blank" href="https://www.booking.com/hotel/bg/kristal.uk.html"
                       class="hotels__item-name">Кристал</a>
                    <div class="hotels__item-title">4 зірки, Золоті Піски</div>
                    <img class="hotels__item-img" src="/public/images/hotels/kristal.jpg">
                </div>

            </div>
        </div>
    </div>

    <div class="form">
        <div class="form__block layout">

            <div class="form__contact-name">Задати питання</div>

            <div class="form__contacts">
                <a href="tel:+380972141648" class="form__contact">+38-097-214-16-48</a>
                <div class="form__social">
                    @include('components.social')
                </div>
            </div>

            <div class="form__contact-name">або</div>
            <a target="_blank" href="https://forms.gle/H8rSUwsF7injQaQH6" class="form__button">Зареєструватись</a>




        </div>
    </div>

    <div class="faq">
        <div class="faq__block layout">

            <div class="faq__title">Питання та відповіді</div>

            <div class="faq__items">
                <div id="answer_1" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Що це за програма?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Це програма тимчасового захисту громадян України, які покидають територію України з метою
                            захисту від війни. Детально можливості даної програми описані за посиланням: <a
                                href="https://ukraine.gov.bg/ua/your-legal-status/">https://ukraine.gov.bg/ua/your-legal-status/</a>
                        </p>
                        <p>Ми зі своєї сторони допомагаємо в організації доїзду до Болгарії, оформленні статусу
                            «тимчасового захисту», оформленні безкоштовного проживання в готелях 4 зірки, біля моря, та
                            наданні 3-разового харчування на базі готелю. На даний момент програма діє до 31 травня 2022
                            року.</p>
                    </div>
                </div>
                <div id="answer_2" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Звідки та о котрій годині буде виїзд?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Час та місце зупинок повідомляємо за день до виїзду.</p>
                    </div>
                </div>
                <div id="answer_3" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Скільки це коштує та коли оплачувати?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>60 євро + 1000 грн.</p>
                        <p>1000 грн це передоплата, яка оплачується відразу після реєстрації за формою (тільки після
                            цього за Вами закріплюються місця) та 60 євро вже на посадці в автобус, бажано в євро та без
                            здачі, пояснюємо чому. Саме тому що автобус замовлений в Болгарії і оплачували його потрібно
                            в євро. Якщо в когось долари, тоді це 70 дол. Якщо буде хтось, в кого гривні, тоді по
                            комерційному курсу в обмінниках, на день виїзду (зараз можна орієнтуватись на курс 38-40 грн
                            за євро). Ціна проїзду вирахувана з заповненням всього автобусу, тому якщо хтось відмовиться
                            за день до від’їзду, має розуміти, що підведе всіх в автобусі та нас.</p>
                    </div>
                </div>
                <div id="answer_4" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">З якими документами можна виїхати?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>- з закордонним біометричним паспортом</p>
                        <p>- з закордонним не біометричним паспортом</p>
                        <p>- без будь-якого закордонного паспорту, а лише при наявності внутрішнього українського
                            паспорту</p>
                        <p>- діти по свідоцтву про народження</p>
                        <p>- діти, яким менше 16 років, та які виїжджають в супроводі третіх осіб (не одного з батьків),
                            мають мати при собі нотаріальне доручення на виїзд</p>
                    </div>
                </div>
                <div id="answer_5" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Скільки можна проживати в готелі?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>При приїзді в готель Вам необхідно буде підписати зобов’язання перебувати в готелі до 31
                            травня 2022 року. Ця умова є обов’язковою, але хочемо зазначити, що у Вас буде можливість
                            залишити готель з поважних причин. Потрібно буде обов’язково попередити про дату виїзду
                            представника готелю. І надалі він допоможе все коректно оформити.</p>
                    </div>
                </div>
                <div id="answer_6" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Я їду з маленькою дитиною, за неї теж необхідно оплачувати?
                        </div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Так, діти незалежно від віку оплачують так само, оскільки оплата відбувається за місце.</p>
                    </div>
                </div>
                <div id="answer_7" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Я готовий/а їхати, що далі?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Якщо Ви приймаєте рішення скористатися цією програмою, Ви реєструєтесь за формою на сайті.
                            Після чого Вам будуть надіслані реквізити для оплати. Тільки з передоплатою за Вами
                            закріплюється місце.</p>
                    </div>
                </div>
                <div id="answer_8" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Куди нас поселять та коли це буде відомо?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Після того, як необхідна кількість людей для автобусу буде набрана, я відправлю всі дані моїм
                            колегам в Болгарію, вони розподілять всіх в готель і в номери. Після чого я Вам точно зможу
                            сказати, в який саме готель ми їдемо. Хочу Вас заспокоїти, всі готелі зараз, це 4 зірки, є
                            навіть 5 зірок.На даний момент розселяємо на курорті Золоті Піски. 17 км від нього
                            знаходиться місто Варна, де Ви зможете знайти все необхідне (дитяче харчування, одяг тощо),
                            по звичайним болгарським цінам. Там їздить звичайний автобус, тому дістатися проблем ніяких
                            не буде. </p>
                    </div>
                </div>
                <div id="answer_9" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Розселення в готелі.</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Важливо розуміти, що розселення буде по принципу «зайняти всі вільні місця», тому може бути
                            варіант, що з вами буде хтось незнайомий. Двомісного розселення майже немає. Частіше 3-4-5,
                            якщо 5 то це дві кімнати, в двомісних номерах зазвичай третє ліжко – це розкладний
                            диван.</p>
                    </div>
                </div>
                <div id="answer_10" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Коли буде відомо точну дату та час виїзду?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>За 1-2 дні до дати виїзду Ви отримаєте інформацію про час і місце відправки автобусу з міст
                            за маршрутом. </p>
                    </div>
                </div>
                <div id="answer_11" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Скільки часу в дорозі?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Поїздка займає від 24 годин та залежить від самої ситуації на дорогах, від черг на кордоні та
                            часу на реєстрацію. Тому ви маєте бути готові до того, що поїздка може зайняти 30-35
                            годин. </p>
                    </div>
                </div>
                <div id="answer_12" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Хто нас реєструє на отримання статуту «тимчасового захисту» і
                            чи обов’язково це?
                        </div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Головною умовою програми є – реєстрація на отримання тимчасової допомоги. Зареєструватись
                            можливо на кордоні з Болгарією та вже на території Болгарії в спеціально відкритих пунктах.
                            Де саме будемо реєструватися, будемо вирішувати по ситуації.</p>
                        <p>Ситуація в Болгарії з реєстрацією на «тимчасову допомогу», м’яко кажучи не дуже. Пункти
                            реєстрації не справляються з кількістю людей, а готелі в свою чергу не можуть розселити без
                            реєстрації. Саме тому один з найкращих і безпечних варіантів, це отримати реєстрацію на
                            кордоні або в одному з перших міст на шляху до готелю. Але важливо розуміти, ця реєстрація,
                            може зайняти 5 годин, а може і 10. І весь цей час доведеться чекати. Але це дуже важливо
                            зробити відразу. Тому прошу, хто не готовий до подібних випробувань, краще не їхати.</p>
                    </div>
                </div>
                <div id="answer_13" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Автобус довозить тільки до кордону? Як дістатись до готелю?
                        </div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Автобус довозить прямо в готель, там всім буде надана допомога при розселенні. Зберуться
                            питання, в кого які є, і після якогось часу відпочинку, відповімо на всі хвилюючі
                            питання.</p>
                    </div>
                </div>
                <div id="answer_14" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Чи надається якась додаткова матеріальна допомога?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>За програмою надається безоплатно проживання в готелях (саме з ними ми і домовляємось та направляємо туди людей з організованого рейсу), харчування в готелі.</p>

                        <p>Після заселення в готель можна буде оформити одноразову соціальну виплату, в розмірі 375 лев на сім'ю (приблизно 190 євро). Виплати допомоги будуть у травні.</p>

                        <p>Також за програмою «тимчасового захисту» надається соціальна допомога, невідкладна медична допомога та розширена медична допомога для незахищених верств населення.</p>
                    </div>
                </div>
                <div id="answer_15" class="faq__item">
                    <div class="faq__item-title">
                        <div class="faq__item-title-name">Чи можливо їхати з тваринами?</div>
                        <div class="faq__item-title-link"></div>
                        <div class="faq__item-title-copy"></div>
                    </div>
                    <div class="faq__item-answer">
                        <p>Не всі готелі готові приймати з тваринами, але ми постараємося найти варіанти для розміщення
                            з тваринами (до 5 кг). Вам необхідно буде відразу про це попередити та зазначити в формі для
                            реєстрації. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
