<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> Nøzama </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <?php
  $via = $_POST['via'];
  $cap = $_POST['cap'];
  $nCiv = $_POST['nCiv'];
  $comune = $_POST['comune'];
  $provincia = $_POST['provincia'];

  $FragioneSociale = $_POST['ragSociale'];
  $FpecCod = $_POST['pecCod'];
  $FpartitaIva = $_POST['partitaIva'];
  $Fvia = $_POST['Fvia'];
  $Fcap = $_POST['Fcap'];
  $FnCiv = $_POST['FnCiv'];
  $Fcomune = $_POST['Fcomune'];
  $Fprovincia = $_POST['Fprovincia'];
  $FcodFiscale = $_POST['FcodFiscale'];
  echo "
 $via <br>
 $cap <br>
 $nCiv <br>
 $comune<br>
 $provincia <br>
 $FragioneSociale<br>
 $FpecCod <br>
 $FpartitaIva <br>
 $Fvia<br>
 $Fcap <br>
 $FnCiv <br>
 $Fcomune <br>
 $Fprovincia <br>
 $FcodFiscale <br>
 
 ";


  ?>





  <div class="wrapper" id="app">
    <div class="card-form">
      <div class="card-list">
        <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
          <div class="card-item__side -front">
            <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }" v-bind:style="focusElementStyle" ref="focusElement"></div>
            <div class="card-item__cover">
              <img v-bind:src="'../../../../img/carteCredito/' + currentCardBackground + '.jpeg'" class="card-item__bg">
            </div>

            <div class="card-item__wrapper">
              <div class="card-item__top">
                <img src="../../../../img/carteCredito/chip.png" class="card-item__chip">
                <div class="card-item__type">
                  <transition name="slide-fade-up">
                    <img v-bind:src="'../../../../img/carteCredito/' + getCardType + '.png'" v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
                  </transition>
                </div>
              </div>
              <label for="cardNumber" class="card-item__number" ref="cardNumber">
                <template v-if="getCardType === 'amex'">
                  <span v-for="(n, $index) in amexCardMask" :key="$index">
                    <transition name="slide-fade-up">
                      <div class="card-item__numberItem" v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">*</div>
                      <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                        {{cardNumber[$index]}}
                      </div>
                      <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                    </transition>
                  </span>
                </template>

                <template v-else>
                  <span v-for="(n, $index) in otherCardMask" :key="$index">
                    <transition name="slide-fade-up">
                      <div class="card-item__numberItem" v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">*</div>
                      <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                        {{cardNumber[$index]}}
                      </div>
                      <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                    </transition>
                  </span>
                </template>
              </label>
              <div class="card-item__content">
                <label for="cardName" class="card-item__info" ref="cardName">
                  <div class="card-item__holder">Titolare</div>
                  <transition name="slide-fade-up">
                    <div class="card-item__name" v-if="cardName.length" key="1">
                      <transition-group name="slide-fade-right">
                        <span class="card-item__nameItem" v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')" v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                      </transition-group>
                    </div>
                    <div class="card-item__name" v-else key="2">Nome Cognome</div>
                  </transition>
                </label>
                <div class="card-item__date" ref="cardDate">
                  <label for="cardMonth" class="card-item__dateTitle">Scadenza</label>
                  <label for="cardMonth" class="card-item__dateItem">
                    <transition name="slide-fade-up">
                      <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                      <span v-else key="2">MM</span>
                    </transition>
                  </label>
                  /
                  <label for="cardYear" class="card-item__dateItem">
                    <transition name="slide-fade-up">
                      <span v-if="cardYear" v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                      <span v-else key="2">YY</span>
                    </transition>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-item__side -back">
            <div class="card-item__cover">
              <img v-bind:src="'../../../../img/carteCredito/' + currentCardBackground + '.jpeg'" class="card-item__bg">
            </div>
            <div class="card-item__band"></div>
            <div class="card-item__cvv">
              <div class="card-item__cvvTitle">CVV</div>
              <div class="card-item__cvvBand">
                <span v-for="(n, $index) in cardCvv" :key="$index">
                  *
                </span>

              </div>
              <div class="card-item__type">
                <img v-bind:src="'../../../../img/carteCredito/' + getCardType + '.png'" v-if="getCardType" class="card-item__typeImg">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-form__inner">
        <form action="./RSA/chiavi.php" method="POST">
          <!-- NUMERO CARTA -->
          <div class="card-input">
            <label for="cardNumber" class="card-input__label">Numero carta</label>
            <input type="text" id="cardNumber" name="numero" class="card-input__input" v-mask="generateCardNumberMask" required v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber" autocomplete="off">
          </div>
          <!-- FINE NUMERO CARTA -->
          <!-- NOME CARTA -->
          <div class="card-input">
            <label for="cardName" class="card-input__label">Titolare</label>
            <input type="text" id="cardName" name="nome" class="card-input__input" v-model="cardName" v-on:focus="focusInput" required v-on:blur="blurInput" data-ref="cardName" autocomplete="off">
          </div>
          <!-- FINE NOME CARTA -->
          <div class="card-form__row">
            <div class="card-form__col">
              <div class="card-form__group">
                <!-- MESE -->
                <label for="cardMonth" class="card-input__label">Scadenza</label>
                <select class="card-input__input -select" id="cardMonth" name="mese" v-model="cardMonth" v-on:focus="focusInput" required v-on:blur="blurInput" data-ref="cardDate">
                  <option value="" disabled selected>Mese</option>
                  <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth" v-bind:key="n">
                    {{n < 10 ? '0' + n : n}}
                  </option>
                </select>
                <!-- FINE MESE -->
                <!-- ANNO -->
                <select class="card-input__input -select" id="cardYear" name="anno" v-model="cardYear" v-on:focus="focusInput" required v-on:blur="blurInput" data-ref="cardDate">
                  <option value="" disabled selected>Anno</option>
                  <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                    {{$index + minCardYear}}
                  </option>
                </select>
                <!-- FINE ANNO -->
              </div>
            </div>
            <!-- CVV -->
            <div class="card-form__col -cvv">
              <div class="card-input">
                <label for="cardCvv" class="card-input__label">CVV</label>
                <input type="text" class="card-input__input" id="cardCvv" name="cvc" v-mask="'###'" maxlength="3" v-model="cardCvv" required v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off">
              </div>
            </div>
            <!-- FINE CVV -->
          </div>

          <button class="card-form__button" type="submit"> Conferma </button>
        </form>

      </div>
    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
  <script src='https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js'></script>
  <script src="./script.js"></script>

</body>

</html>