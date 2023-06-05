@extends('index')

@section('content')
    <div class="wrapper">
        <section class="current-rate-section">
            <h2 class="main-title">Поточний курс</h2>
            <figure class="course-card">
                <div class="course-card-title">
                    <img src="" alt="">
                    <h3>JAVASCRIPT DEVELOPER (FRONT-END)</h3>
                </div>
                <figcaption>
                    <div class="progress-bar-conteiner">
                        <p class="progress-bar-legend">Успішність 35%</p>
                        <span class="progress-bar"></span>
                    </div>
                </figcaption>
            </figure>
        </section>
    
        <section class="schedule-section">
            <h2 class="main-title">Розклад занять</h2>
        </section>
    
        <section class="homework-section">
            <h2 class="main-title">Домашні завдання</h2>
        </section>
    
        <section class="notes-section">
            <h2 class="main-title">Замітки</h2>
            <div class="notes-box">
                <a href="#">ввідна лекція смм, підготувати лекцію</a>
                <a href="#">ввідна лекція смм, підготувати лекцію</a>
                <a href="#">ввідна лекція смм, підготувати лекцію</a>
            </div>
        </section>
    
        <section class="wallet-section">
            <h2 class="main-title">Гаманець</h2>
            <div class="wallet">
                <div class="balance">
                    <p class="balance-title">Баланс</p>
                    <div class="balance-amount">100500</div>
                </div>
                <div class="wallet-btns">
                    <a href="#" class="wallet-btn">
                        <img src="" alt="">
                        <span>переказати</span>
                    </a>
                    <a href="#" class="wallet-btn">
                        <img src="" alt="">
                        <span>поповнити</span>
                    </a>
                    <a href="#" class="wallet-btn">
                        <img src="" alt="">
                        <span>вивести</span>
                    </a>
                </div>
            </div>
        </section>
    
        <section class="transactions-section">
            <h2 class="main-title">Трансакції</h2>
            <table class="transactions">
                <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Призначення</th>
                        <th>Сума</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12.10.22</td>
                        <td>Переказ для <span class="transaction-highlight">A. Костроміна</span></td>
                        <td>-500</td>
                    </tr>
                    <tr>
                        <td>12.10.22</td>
                        <td>Поповнення</td>
                        <td><span class="transaction-highlight">10500</span></td>
                    </tr>
                    <tr>
                        <td>12.10.22</td>
                        <td>Виведення готівки</td>
                        <td>-1500</td>
                    </tr>
                    <tr>
                        <td>12.10.22</td>
                        <td>Виведення готівки</td>
                        <td>-1500</td>
                    </tr>
                    <tr>
                        <td>12.10.22</td>
                        <td>Виведення готівки</td>
                        <td>-1500</td>
                    </tr>
                    <tr>
                        <td>12.10.22</td>
                        <td>Виведення готівки</td>
                        <td>-1500</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection