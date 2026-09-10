<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="przerzut.css">
    <!-- <script defer src="script.js"></script>  -->
    <title>Document</title> 
</head>

<body>
    <header>
        <section class="rodzicleft">
            <section class="h1box">
                <img src="przerzut.png" alt="Przerzut" class="prze">
            </section>
            <section class="pbox">
                <section class="pboxsmall">
                    <p>Ekspresowe przeprowadzki</p>
                </section>
            </section>
        </section>
        <nav>
            <section class="kwerenda">
                <section class="kwe">
                    <p>Kwerenda_1</p>
                </section>
                <section class="kwe">
                    <p>Kwerenda_2</p>
                </section>
            </section>
            <section class="kwerenda2">
                <section class="kwe">
                    <p>Kwerenda_3</p>
                </section>
                <section class="kwe">
                    <p>Kwerenda_4</p>
                </section>
            </section>
        </nav>
    </header>
    <section class="cialo">
        <main>
            <section class="lewog">
                <section class="zaplanowane">
                    <p>Zaplanowane przewozy</p>
                </section>
                <section class="tabelag">
                    <table class="tableg">
                        <tr>
                            <th>Zlecenie</th>
                            <th>Data</th>
                            <th>Akcja</th>
                        </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "przerzut");
                    $query = "SELECT * from zlecenia";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id_zlecenia'];
                        $zlecenie = $row['Tytuł'];
                        $data = $row['Data'];
                        echo"
                            <tr>
                                <td>$zlecenie</td>
                                <td>$data</td>
                                <td>
                                    <form action='usun.php' method='post'>
                                        <input type='hidden' value='$id' name='id_zlecenia'  />
                                        <button>USUŃ</button>
                                    </form>
                                </td>    
                            </tr>
                        ";
                    }
                ?>
                        <!-- <tr>
                            <td>Przewóz mebli z ulicy Nawrot 13 na ulicę Długą 8</td>
                            <td>2019-11-06</td>
                            <td><button class="btn_usun">USUŃ</button></td>
                        </tr>
                        <tr>
                            <td>Odbiór listów firmowych</td>
                            <td>2019-11-18</td>
                            <td><button class="btn_usun">USUŃ</button></td>
                        </tr>
                        <tr>
                            <td>Wywóz gruzu z ulicy Rumuńskiej 2</td>
                            <td>2020-11-20</td>
                            <td><button class="btn_usun">USUŃ</button></td>
                        </tr>
                        <tr>
                            <td>Odbiór towarów niesortowanych</td>
                            <td>2020-11-22</td>
                            <td><button class="btn_usun">USUŃ</button></td>
                        </tr>
                        <tr>
                            <td>Przewóz mebli z ulicy Długiej 7 na Krótką 13</td>
                            <td>2020-11-23</td>
                            <td><button class="btn_usun">USUŃ</button></td>
                        </tr>
                        <tr>
                            <td>Spotkanie firmowe</td>
                            <td>2021-02-26</td>
                            <td><button class="btn_usun">USUŃ</button></td>
                        </tr> -->
                    </table>
                </section>
                <section class="tabelad">
                    <form action='dodaj.php' method='post'>
                        <table class="tabled">
                            <tr>
                                <th><label for="tytul">Tytuł zlecenia</label></th>
                                <th><label for="data">Data</label></th>
                            </tr>
                            <tr>
                                <td><input type="text" name="tytul" id="tytul"></td>
                                <td><input type="date" name="data" id="data"></td>
                            </tr>
                            
                            
                            
                        </table>
                        <button id="btn_dodaj">
                            Dodaj
                        </button>
                    </form>


                </section>
            </section>
            <footer>
                <p>Stronę wykonał: Jakub Ura</p>
            </footer>
        </main>
        <aside>
            <section class="bialyb">
                <section class="up">
                    <h2>Nasza specjalizacja</h2>
                    <ul>
                        <li>Przeprowadzki</li>
                        <li>Przewóz mebli</li>
                        <li>Wywóz gruzu</li>
                        <li>Przesyłki gabarytowe</li>
                        <li>Wynajem pojazdów</li>
                        <li>Zakup towarów</li>
                    </ul>

                </section>
                <section class="mid">
                    <img src="wan.png" alt="Autokar" class="wanimg">
                </section>
                <section class="down">
                    <section class="jeden"></section>
                    <section class="dwa"></section>
                    <section class="trzy"></section>
                    <section class="cztery"></section>
                </section>
            </section>
        </aside>
    </section>
</body>

</html>