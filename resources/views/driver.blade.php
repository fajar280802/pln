<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
            rel="stylesheet"
        />
        <title>Pertanyaan Layanan dengan Star Rating TAD CLEANING</title>
        <style>
            body {
                font-family: "poppins", sans-serif;

                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                margin: 0;
            }
            .select-menu {
                width: 300px;
                margin: 3px;
                position: relative;
                padding: 2px;
            }
            .select-menu .select-btn {
                display: flex;
                height: 20px;
                background: #ffffff;
                padding: 20px;
                font-size: 16px;
                font-weight: 400;
                border-radius: 8px;
                align-items: center;
                cursor: pointer;
                justify-content: space-between;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
            .select-btn i {
                font-size: 25px;
                transition: 0.3s;
            }
            .select-menu.active .select-btn i {
                transform: rotate(-180deg);
            }
            .select-menu .options {
                position: relative;
                padding: 20px;
                margin-top: 10px;
                border-radius: 8px;
                background: #e3f4f4;
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
                display: none;
            }
            .select-menu.active .options {
                display: block;
            }
            .options .option {
                display: flex;
                height: 55px;
                cursor: pointer;
                padding: 0 16px;
                border-radius: 8px;
                align-items: center;
                background: #e3f4f4;
            }

            .options .option:hover {
                background: #ffffff;
            }
            .option i {
                font-size: 15px;
                margin-right: 12px;
            }
            .option .option-text {
                font-size: 15px;
                color: #333;
            }

            .question-container {
                display: flex;
                flex-direction: column;
                width: 50%;
                max-width: 500px;
                background-color: #29adb2;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            .question {
                margin-bottom: 20px;
            }

            .question-label {
                font-weight: bold;
                font-size: 15px;
            }

            .rating {
                display: inline-block;
                unicode-bidi: bidi-override;
                direction: rtl;
            }

            .rating > input {
                display: none;
            }

            .rating > label {
                float: right;
                cursor: pointer;
                color: #ffffff;
                font-size: 25px;
            }

            .rating > label:before {
                content: "\2605"; /* Bintang unicode */
                padding: 5px;
            }

            .rating > input:checked ~ label,
            .rating > input:checked ~ label ~ label {
                color: #f7d401; /* Warna bintang yang diisi */
            }

            .rating > label:hover,
            .rating > label:hover ~ label {
                color: #ffdb70; /* Warna bintang saat dihover */
            }
            .form-container {
                background-color: #268391;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                width: 90%;
                max-width: 300px;
            }
            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .form-group input[type="text"],
            .form-group input[type="date"],
            .form-group textarea {
                width: 60%;
                padding: 15px;
                border: 1px solid #268391;
                border-radius: 4px;
                background-color: #e3f4f4;
                font-family: "Poppins", sans-serif;
            }
            .form-group textarea {
                resize: vertical;
            }

            .button {
                padding: 1em 2em;
                border: none;
                border-radius: 5px;
                font-weight: bold;
                letter-spacing: 5px;
                text-transform: uppercase;
                color: #2c9caf;
                transition: all 1000ms;
                font-size: 15px;
                position: relative;
                overflow: hidden;
                outline: 2px solid #2c9caf;
            }

            button:hover {
                color: #e3f4f4;
                transform: scale(1.1);
                outline: 2px solid #70bdca;
                box-shadow: 4px 5px 17px -4px #268391;
            }

            button::before {
                content: "";
                position: absolute;
                left: -50px;
                top: 0;
                width: 0;
                height: 100%;
                background-color: #2c9caf;
                transform: skewX(45deg);
                z-index: -1;
                transition: width 1000ms;
            }

            button:hover::before {
                width: 250%;
            }
        </style>
    </head>
    <body>
        <div class="question-container">
            <font size="2">
                <center><h1>PENILAIAN TAD DRIVER</h1></center></font
            >
            <div class="select-menu">
                <div class="form-group">
                    <label for="name">NAMA DRIVER</label>
                    <div class="select-btn">
                        <span class="sBtn-text">PILIH</span>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <ul class="options">
                        <li class="option">
                            <span class="option-text">ABU BAKAR</span>
                        </li>
                        <li class="option">
                            <span class="option-text">AGUS SUNARYO</span>
                        </li>
                        <li class="option">
                            <span class="option-text">AHMAD YUSMI</span>
                        </li>
                        <li class="option">
                            <span class="option-text">ANTON YULIUSMAN</span>
                        </li>
                        <li class="option">
                            <span class="option-text">ARIS NUR AROFA</span>
                        </li>
                        <li class="option">
                            <span class="option-text">BARMEN SITORUS</span>
                        </li>
                        <li class="option">
                            <span class="option-text">DESWAN</span>
                        </li>
                        <li class="option">
                            <span class="option-text">EDMAN SONARI</span>
                        </li>
                        <li class="option">
                            <span class="option-text">FAISAL</span>
                        </li>
                        <li class="option">
                            <span class="option-text">HADI TANAYA</span>
                        </li>
                        <li class="option">
                            <span class="option-text">INDRA PRAYOGI</span>
                        </li>
                        <li class="option">
                            <span class="option-text">ISKANDAR DAUD</span>
                        </li>
                        <li class="option">
                            <span class="option-text">ISMAIL QODRI</span>
                        </li>
                        <li class="option">
                            <span class="option-text">ISMET</span>
                        </li>
                        <li class="option">
                            <span class="option-text">M. HAFIZ PRAUTAMA</span>
                        </li>
                        <li class="option">
                            <span class="option-text"
                                >MUHAMMAD REZA FAHLEVI</span
                            >
                        </li>
                        <li class="option">
                            <span class="option-text">RIDUAN EFFENDI</span>
                        </li>
                        <li class="option">
                            <span class="option-text">SISWANTO</span>
                        </li>
                        <li class="option">
                            <span class="option-text">TANZA TRISNA</span>
                        </li>
                        <li class="option"></li>
                    </ul>
                </div>
            </div>
            <div class="form-group">
                <label for="fname">TANGGAL PENGGUNAAN</label>
                <input type="date" id="fname" />
            </div>
            <div class="form-group">
                <label for="fname"
                    >JENIS KENDARAAN (CONTOH: INNOVA/AVANZA BG 1383 MD)</label
                >
                <input type="text" id="fname" />
            </div>
            <div class="question">
                <label class="question-label">KEDISIPLINAN</label>
                <br />
                <div class="rating">
                    <input type="radio" id="star1_2" name="rating2" value="1" />
                    <label for="star1_2"></label>
                    <input type="radio" id="star2_2" name="rating2" value="2" />
                    <label for="star2_2"></label>
                    <input type="radio" id="star3_2" name="rating2" value="3" />
                    <label for="star3_2"></label>
                    <input type="radio" id="star4_2" name="rating2" value="4" />
                    <label for="star4_2"></label>
                    <input type="radio" id="star5_2" name="rating2" value="5" />
                    <label for="star5_2"></label>
                </div>
            </div>

            <div class="question">
                <label class="question-label">KERAPIAN PEGAWAI</label>
                <br />
                <div class="rating">
                    <input type="radio" id="star1_4" name="rating4" value="1" />
                    <label for="star1_4"></label>
                    <input type="radio" id="star2_4" name="rating4" value="2" />
                    <label for="star2_4"></label>
                    <input type="radio" id="star3_4" name="rating4" value="3" />
                    <label for="star3_4"></label>
                    <input type="radio" id="star4_4" name="rating4" value="4" />
                    <label for="star4_4"></label>
                    <input type="radio" id="star5_4" name="rating4" value="5" />
                    <label for="star5_4"></label>
                </div>
            </div>

            <div class="question">
                <label class="question-label">KEBERSIHAN KENDARAAN</label>
                <br />
                <div class="rating">
                    <input type="radio" id="star1_3" name="rating3" value="1" />
                    <label for="star1_3"></label>
                    <input type="radio" id="star2_3" name="rating3" value="2" />
                    <label for="star2_3"></label>
                    <input type="radio" id="star3_3" name="rating3" value="3" />
                    <label for="star3_3"></label>
                    <input type="radio" id="star4_3" name="rating3" value="4" />
                    <label for="star4_3"></label>
                    <input type="radio" id="star5_3" name="rating3" value="5" />
                    <label for="star5_3"></label>
                </div>
                <div class="question">
                    <label class="question-label">KENYAMANAN KENDARAAN</label>
                    <br />
                    <div class="rating">
                        <input
                            type="radio"
                            id="star1_5"
                            name="rating5"
                            value="1"
                        />
                        <label for="star1_5"></label>
                        <input
                            type="radio"
                            id="star2_5"
                            name="rating5"
                            value="2"
                        />
                        <label for="star2_5"></label>
                        <input
                            type="radio"
                            id="star3_5"
                            name="rating5"
                            value="3"
                        />
                        <label for="star3_5"></label>
                        <input
                            type="radio"
                            id="star4_5"
                            name="rating5"
                            value="4"
                        />
                        <label for="star4_5"></label>
                        <input
                            type="radio"
                            id="star5_5"
                            name="rating5"
                            value="5"
                        />
                        <label for="star5_5"></label>
                    </div>
                </div>
                <div class="question">
                    <label class="question-label">PELAYANAN</label>
                    <br />
                    <div class="rating">
                        <input
                            type="radio"
                            id="star1_6"
                            name="rating6"
                            value="1"
                        />
                        <label for="star1_6"></label>
                        <input
                            type="radio"
                            id="star2_6"
                            name="rating6"
                            value="2"
                        />
                        <label for="star2_6"></label>
                        <input
                            type="radio"
                            id="star3_6"
                            name="rating6"
                            value="3"
                        />
                        <label for="star3_6"></label>
                        <input
                            type="radio"
                            id="star4_6"
                            name="rating6"
                            value="4"
                        />
                        <label for="star4_6"></label>
                        <input
                            type="radio"
                            id="star5_6"
                            name="rating6"
                            value="5"
                        />
                        <label for="star5_6"></label>
                    </div>
                </div>
            </div>

            <button class="button">KIRIM</button>
        </div>
        <script src="script1.js"></script>
    </body>
</html>
