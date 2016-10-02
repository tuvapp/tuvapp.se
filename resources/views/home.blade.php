@extends('master')

@section('content')
<div
  <div class="parallax filter-black">
          <a href="app"><div id="particle-canvas">
    </div></a>
  <div class="small-info">
      <h1 style="
  padding-right: 5px;
  padding-left: 5px;
  font-weight: 700;
">A smart and connected local community</h1>
        <h3>Creative Tim stands for everything a designer looks in his work: clean and beautiful interfaces for great products.</h3>
            <br>

  <center><button class="btn btn-primary btn-lg">Start a local community</button></center>
</div>
</div>
</div>

<nav class="cf">
<div id="li">
  <a href="shop"><li>
    <svg class="icon-camera" viewBox="0,0,54,72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
    <g>
        <g id="Icons">
            <g>
                <g>
                    <path class="big-circle" d="M26.9999,3.00516C13.542,3.00516 3.00001,13.5471 3.00001,27.0052C3.00001,40.4631 13.542,51.0051 26.9999,51.0051C40.4581,51.0051 51.0001,40.4631 51.0001,27.0052C51.0001,13.5471 40.4581,3.00516 26.9999,3.00516M26.9999,54.0053C12.1125,54.0053 -1.31006e-14,41.8926 -1.31006e-14,27.0052C-1.31006e-14,12.1177 12.1125,0.00514982 26.9999,0.00514982C41.8875,0.00514982 54,12.1177 54,27.0052C54,41.8926 41.8875,54.0053 26.9999,54.0053" style="fill-rule:nonzero;"/>
                </g>
                <g>
                    <path class="small-circle" d="M26.9985,13.5052C22.863,13.5052 19.5,16.8697 19.5,21.0052C19.5,25.1407 22.863,28.5052 26.9985,28.5052C31.1354,28.5052 34.5,25.1407 34.5,21.0052C34.5,16.8697 31.1354,13.5052 26.9985,13.5052M26.9985,31.5051C21.21,31.5051 16.5,26.7937 16.5,21.0052C16.5,15.2167 21.21,10.5052 26.9985,10.5052C32.7885,10.5052 37.5002,15.2167 37.5002,21.0052C37.5002,26.7937 32.7885,31.5051 26.9985,31.5051" style="fill-rule:nonzero;"/>
                </g>
                <g>
                    <path class="dot" d="M33.0014,19.5052C33.0014,21.1612 31.6574,22.5052 30.0001,22.5052C28.3456,22.5052 26.9999,21.1612 26.9999,19.5052C26.9999,17.8492 28.3456,16.5052 30.0001,16.5052C31.6574,16.5052 33.0014,17.8492 33.0014,19.5052" style="fill-rule:nonzero;"/>
                </g>
                <g>
                    <path class="stand" d="M24,60.0052L30.0001,60.0052L30.0001,54.0053L24,54.0053ZM31.5,63.0051L22.5,63.0051C21.6705,63.0051 21,62.3331 21,61.5051L21,52.5051C21,51.6771 21.6705,51.0051 22.5,51.0051L31.5,51.0051C32.3294,51.0051 33,51.6771 33,52.5051L33,61.5051C33,62.3331 32.3294,63.0051 31.5,63.0051" style="fill-rule:nonzero;"/>
                </g>
                <g>
                    <path class="foot" d="M9.65445,71.962C9.54957,71.9614 9.44501,71.956 9.34081,71.9442C9.13847,71.9211 8.93882,71.8751 8.74675,71.8077C8.37301,71.676 8.02979,71.4617 7.74632,71.1851C7.45521,70.9008 7.22866,70.552 7.08876,70.1699C7.01885,69.9789 6.97057,69.7801 6.94494,69.5785C6.93177,69.4747 6.92522,69.3704 6.92322,69.2658C6.91155,67.4215 6.91155,65.5769 6.92322,63.7324C6.925,63.6393 6.93024,63.5465 6.94082,63.454C6.96394,63.2518 7.0098,63.0522 7.07745,62.8601C7.20908,62.4862 7.42324,62.143 7.69999,61.8596C7.98425,61.5686 8.33314,61.3418 8.71528,61.202C8.90619,61.132 9.10489,61.0838 9.30657,61.0582C9.41035,61.0449 9.51458,61.0384 9.61914,61.0364C21.3646,60.962 33.1108,60.962 44.8564,61.0364C44.961,61.0384 45.0651,61.0449 45.1689,61.0582C45.3705,61.0838 45.5693,61.132 45.7602,61.202C46.1423,61.3418 46.4912,61.5686 46.7754,61.8596C47.0524,62.143 47.2664,62.4862 47.3981,62.8601C47.4658,63.0522 47.5115,63.2518 47.5346,63.454C47.5453,63.5465 47.5507,63.6393 47.5523,63.7324C47.5639,65.5769 47.5639,67.4215 47.5523,69.2658C47.5507,69.3588 47.5453,69.4516 47.5346,69.5441C47.5115,69.7466 47.4658,69.9462 47.3981,70.1383C47.2664,70.5119 47.0524,70.8551 46.7754,71.1388C46.4912,71.4298 46.1423,71.6563 45.7602,71.7962C45.5693,71.8661 45.3705,71.9143 45.1689,71.94C45.0651,71.9532 44.961,71.9597 44.8564,71.9617C33.1227,72.0361 21.3884,71.962 9.65445,71.962ZM9.66156,69.706C21.379,69.706 33.0965,69.706 44.8138,69.706C44.8251,69.706 44.8364,69.7057 44.8474,69.7054C44.8657,69.7043 44.8841,69.7023 44.9021,69.6995C45.0637,69.6716 45.2041,69.5574 45.2642,69.4045C45.2853,69.3512 45.2952,69.2945 45.2963,69.2373C45.3082,67.4164 45.2966,65.5958 45.2966,63.7749C45.2966,63.7637 45.2963,63.7527 45.2958,63.7414C45.293,63.6906 45.2828,63.641 45.2642,63.5936C45.2157,63.4704 45.1136,63.3694 44.9898,63.3223C44.9379,63.3029 44.8832,63.2933 44.8277,63.2924C33.106,63.2171 21.3837,63.2922 9.66167,63.2922C9.65047,63.2922 9.63931,63.2924 9.62811,63.293C9.57749,63.2958 9.52772,63.306 9.48051,63.3246C9.35905,63.3722 9.25914,63.4724 9.21126,63.5936C9.19019,63.6472 9.18018,63.7036 9.17908,63.7608C9.16755,65.5817 9.17897,67.4026 9.179,69.2235C9.179,69.2347 9.17922,69.2457 9.1797,69.257C9.18272,69.3095 9.19341,69.3611 9.21334,69.4099C9.26126,69.5272 9.3579,69.6236 9.47524,69.6716C9.51816,69.6893 9.56328,69.6995 9.60939,69.704C9.62679,69.7054 9.6441,69.706 9.66156,69.706Z" style="fill-rule:nonzero;"/>
                </g>
            </g>
        </g>
    </g>
  </svg><div><strong>Smart Home</strong><p></span></div>
  </li></a>
<a href="connect"><li>
    <svg class="icon-tv" viewBox="0,0,97,70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
    <g>
        <g id="Icons">

            <g>
                <path class="foot" d="M61.2054,69.978L35.4802,69.978C34.5925,69.978 33.8722,69.2389 33.8722,68.3247C33.8722,67.4103 34.5925,66.6711 35.4802,66.6711L61.2054,66.6711C62.0931,66.6711 62.8134,67.4103 62.8134,68.3247C62.8134,69.2389 62.0931,69.978 61.2054,69.978" style="fill-rule:nonzero;"/>
            </g>
            <g>
                <path class="tv-shell" d="M2.13996,53.1815L94.86,53.1815L94.86,2.18268L2.13996,2.18268ZM1.94116,55.3684L1.89873,55.3679L1.84978,55.3659L1.80105,55.3629L1.75258,55.3586L1.70429,55.3531L1.6563,55.3463L1.60874,55.3386L1.56145,55.3296L1.51445,55.3192L1.46796,55.308L1.42182,55.2954L1.37608,55.282L1.33087,55.2673L1.28612,55.2517L1.24188,55.2347L1.19811,55.217L1.15486,55.1981L1.11217,55.1784L1.07001,55.1574L1.02844,55.1355L0.987515,55.1128L0.947177,55.089L0.90748,55.0641L0.868399,55.0387L0.829934,55.0119L0.792163,54.9846L0.755089,54.9562L0.718656,54.9269L0.682919,54.8968L0.647984,54.866L0.613718,54.8342L0.580147,54.8017L0.547379,54.7681L0.51544,54.7339L0.484197,54.6989L0.453783,54.6631L0.424198,54.6265L0.395442,54.589L0.367543,54.551L0.340496,54.5122L0.314325,54.4726L0.289076,54.4321L0.264721,54.3911L0.241301,54.3496L0.218848,54.3069L0.197371,54.264L0.176886,54.2203L0.157396,54.176L0.138963,54.1311L0.121603,54.0855L0.105288,54.0396L0.0900761,53.9928L0.0759898,53.9455L0.0630324,53.898L0.0512332,53.8498L0.040603,53.8012L0.0311765,53.7523L0.0229564,53.7028L0.0159614,53.653L0.0102129,53.603L0.00571903,53.5527L0.0024984,53.5021L0.000556388,53.4513L-4.39648e-14,53.4073L-4.39648e-14,1.95844L0.000556388,1.91455L0.0024877,1.86375L0.00570031,1.81315L0.0101782,1.76279L0.0159106,1.71274L0.0228815,1.66299L0.0310802,1.61359L0.0404853,1.56459L0.0510807,1.51599L0.0628559,1.46783L0.0757839,1.42014L0.0898434,1.37296L0.105021,1.32629L0.121303,1.28015L0.138656,1.2346L0.157062,1.18963L0.176512,1.14526L0.196975,1.10152L0.218433,1.05843L0.240871,1.01599L0.26426,0.974236L0.288592,0.933165L0.313846,0.8928L0.339999,0.853148L0.367035,0.814228L0.394934,0.776052L0.42369,0.738628L0.453275,0.701972L0.483689,0.666087L0.514905,0.630992L0.546898,0.596701L0.579666,0.563213L0.61321,0.530545L0.647476,0.498714L0.682491,0.467728L0.718201,0.437592L0.754634,0.408322L0.791762,0.379933L0.829532,0.352435L0.867998,0.325839L0.907106,0.300159L0.946856,0.275411L0.98722,0.2516L1.0282,0.228749L1.06977,0.206874L1.1119,0.185981L1.15462,0.166088L1.19787,0.147209L1.24166,0.129364L1.28596,0.112565L1.33074,0.0968272L1.376,0.0821692L1.42171,0.0686019L1.46788,0.0561445L1.51443,0.0448106L1.56137,0.0346167L1.60869,0.0255737L1.65633,0.0176979L1.70429,0.0110031L1.75252,0.00550297L1.80105,0.00120562L1.84978,-0.00187525L1.89871,-0.00373142L1.94119,-0.00426722L95.0588,-0.00426722L95.1013,-0.00373142L95.1503,-0.00187525L95.199,0.00120562L95.2476,0.00550297L95.2958,0.0110059L95.3437,0.0177007L95.3913,0.0255737L95.4386,0.0346167L95.4857,0.0448134L95.5323,0.0561472L95.5783,0.0686019L95.624,0.0821664L95.6695,0.0968327L95.7142,0.11256L95.7586,0.129366L95.8022,0.147217L95.8455,0.166074L95.888,0.185964L95.9303,0.206885L95.972,0.228758L96.0129,0.251595L96.0533,0.275427L96.0929,0.30015L96.132,0.325844L96.1705,0.352451L96.2082,0.379895L96.2454,0.408284L96.2818,0.437606L96.3176,0.467791L96.3527,0.498679L96.3869,0.530551L96.4203,0.563246L96.4532,0.596668L96.4851,0.630973L96.5164,0.666068L96.5469,0.701939L96.5766,0.73868L96.6052,0.776071L96.633,0.814201L96.66,0.853169L96.6862,0.89274L96.7114,0.933127L96.736,0.974337L96.7593,1.0161L96.7817,1.05838L96.8031,1.10144L96.8235,1.14526L96.843,1.1897L96.8614,1.23458L96.8788,1.28018L96.8951,1.32633L96.9101,1.37285L96.9243,1.42003L96.9371,1.46784L96.9489,1.5161L96.9596,1.56463L96.969,1.61356L96.9773,1.663L96.9842,1.71279L96.9898,1.7627L96.9944,1.81305L96.9976,1.86379L96.9995,1.91456L97,1.95843L97,53.4073L96.9995,53.4513L96.9976,53.5021L96.9944,53.5527L96.9898,53.603L96.9842,53.653L96.9773,53.7028L96.969,53.7523L96.9596,53.8012L96.9489,53.8496L96.9371,53.898L96.924,53.9458L96.9099,53.9928L96.8949,54.0393L96.8786,54.0855L96.8612,54.1311L96.8427,54.176L96.8232,54.2203L96.8026,54.264L96.7812,54.3072L96.7587,54.3493L96.7354,54.3911L96.7111,54.4321L96.6857,54.4726L96.6595,54.5119L96.6325,54.551L96.6046,54.589L96.576,54.6265L96.5463,54.6631L96.5158,54.6989L96.4845,54.7339L96.4527,54.7681L96.4201,54.8014L96.3864,54.8342L96.3521,54.866L96.3174,54.8968L96.2815,54.9269L96.2449,54.9562L96.2079,54.9846L96.1702,55.0119L96.1317,55.0387L96.0927,55.0641L96.0528,55.089L96.0127,55.1128L95.9718,55.1355L95.93,55.1574L95.888,55.1784L95.8452,55.1981L95.8019,55.217L95.7583,55.2347L95.7139,55.2517L95.6692,55.2673L95.624,55.282L95.5783,55.2954L95.5323,55.308L95.4857,55.3192L95.4386,55.3296L95.3913,55.3386L95.3437,55.3463L95.2958,55.3531L95.2474,55.3586L95.199,55.3629L95.1503,55.3659L95.1013,55.3679L95.0591,55.3684Z"/>
            </g>

        </g>
    </g>
</svg><div><strong>Connected</strong><p></p></div>
  </li></a>
<a href="app"><li>
    <svg class="icon-mobile" viewBox="0,0,40,78" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:1.41421;">
        <g>
        <g id="Icons">
            <path class="microphone" d="M23.8493,72.0043l-7.6987,0c-1.062,0 -1.9243,-0.4385 -1.9243,-1.5023c0,-1.0635 0.8623,-1.502 1.9243,-1.502l7.6987,0c1.062,0 1.9245,0.4385 1.9245,1.502c0,1.0638 -0.8625,1.5023 -1.9245,1.5023" style="fill-rule:nonzero;" />
            <path class="phone-shell" d="M2.88913,75.5995l34.2218,0l0.0257,-0.0006l0.0286,-0.0018l0.0277,-0.0033l0.0274,-0.0045l0.0263,-0.0061l0.026,-0.0072l0.0256,-0.0085l0.0245,-0.0097l0.0243,-0.0112l0.0236,-0.0121l0.0233,-0.0133l0.0225,-0.0145l0.0219,-0.016l0.0213,-0.0167l0.0204,-0.0181l0.0196,-0.0187l0.0189,-0.02l0.0175,-0.0209l0.017,-0.0214l0.0157,-0.0224l0.0146,-0.023l0.0134,-0.0236l0.0123,-0.0242l0.0114,-0.0251l0.0099,-0.0254l0.0087,-0.026l0.0079,-0.0266l0.0061,-0.0272l0.0053,-0.0275l0.0038,-0.0288l0.0026,-0.0293l0.0012,-0.0302l0,-72.041l-0.0006,-0.0267l-0.0018,-0.02963l-0.0032,-0.02858l-0.0044,-0.02806l-0.0058,-0.0274l-0.007,-0.02679l-0.0082,-0.02616l-0.0093,-0.0257l-0.0108,-0.02525l-0.0117,-0.02462l-0.0131,-0.0241l-0.014,-0.02341l-0.0152,-0.02277l-0.0163,-0.02204l-0.0172,-0.02126l-0.0184,-0.02035l-0.0193,-0.01949l-0.0201,-0.01844l-0.0207,-0.01741l-0.0216,-0.01635l-0.0225,-0.01522l-0.0227,-0.01404l-0.0237,-0.01287l-0.0239,-0.01161l-0.0245,-0.01041l-0.0251,-0.00915l-0.0254,-0.00789l-0.0262,-0.00662l-0.0269,-0.00531l-0.0274,-0.00397l-0.028,-0.0026l-0.0292,-0.00114l-0.0111,-8e-05l-34.2213,0l-0.02577,0.00046l-0.02859,0.00188l-0.0278,0.0033l-0.02705,0.00464l-0.02644,0.00597l-0.02585,0.00726l-0.02529,0.00852l-0.02477,0.00978l-0.02428,0.01101l-0.02378,0.01225l-0.02316,0.01345l-0.02262,0.01463l-0.02191,0.01577l-0.02127,0.0169l-0.02045,0.01794l-0.01966,0.01898l-0.01877,0.01993l-0.01779,0.0208l-0.01684,0.02166l-0.01575,0.0224l-0.01468,0.02314l-0.01354,0.02373l-0.0124,0.02435l-0.01123,0.02495l-0.01001,0.02543l-0.00884,0.02597l-0.00761,0.02652l-0.00636,0.02704l-0.00514,0.0277l-0.00382,0.02836l-0.00248,0.02912l-0.00111,0.03003l-9e-05,0.01149l0,72.0296l0.00047,0.0269l0.00181,0.0296l0.00318,0.0291l0.00449,0.0281l0.00575,0.0275l0.007,0.0266l0.00823,0.0263l0.00945,0.0257l0.01059,0.0251l0.01182,0.0248l0.01293,0.0239l0.01409,0.0236l0.01517,0.0227l0.01628,0.0217l0.01727,0.0212l0.01821,0.0203l0.01917,0.0196l0.01998,0.0182l0.02084,0.0175l0.02153,0.0163l0.02214,0.0152l0.02288,0.0139l0.02352,0.013l0.02404,0.0115l0.02465,0.0102l0.02495,0.0094l0.02556,0.0079l0.02625,0.0066l0.02679,0.0052l0.02742,0.0039l0.02848,0.0027l0.02892,0.0012ZM2.88201,78.0187l-0.03326,-0.0003l-0.03723,-0.0006l-0.03667,-0.0012l-0.03668,-0.0018l-0.03688,-0.0021l-0.03647,-0.0027l-0.03647,-0.0031l-0.0363,-0.0036l-0.03623,-0.0039l-0.03624,-0.0046l-0.03621,-0.0051l-0.03577,-0.0054l-0.03577,-0.0058l-0.03568,-0.0063l-0.03531,-0.007l-0.03559,-0.0073l-0.03519,-0.0075l-0.03489,-0.0082l-0.03525,-0.0087l-0.0346,-0.0088l-0.03452,-0.0097l-0.03463,-0.01l-0.0342,-0.0103l-0.0339,-0.0105l-0.03399,-0.0112l-0.0339,-0.0115l-0.03327,-0.0121l-0.03332,-0.0124l-0.0334,-0.0127l-0.03294,-0.0133l-0.03265,-0.0136l-0.0325,-0.0139l-0.03239,-0.0146l-0.03227,-0.0148l-0.0318,-0.0151l-0.03166,-0.0157l-0.03151,-0.016l-0.03122,-0.0164l-0.03122,-0.0166l-0.03075,-0.0172l-0.03043,-0.0173l-0.03043,-0.0178l-0.03026,-0.0185l-0.02982,-0.0184l-0.02947,-0.0188l-0.02944,-0.0193l-0.02926,-0.0197l-0.02883,-0.0199l-0.02862,-0.0203l-0.02842,-0.0209l-0.02812,-0.0208l-0.0279,-0.0215l-0.02754,-0.0215l-0.02725,-0.022l-0.02716,-0.0224l-0.02682,-0.0227l-0.02652,-0.0227l-0.026257,-0.0233l-0.025938,-0.0235l-0.025821,-0.0242l-0.025384,-0.0242l-0.025121,-0.0245l-0.024917,-0.0248l-0.02445,-0.0251l-0.024304,-0.0257l-0.023984,-0.0257l-0.023633,-0.026l-0.023458,-0.0263l-0.023108,-0.0267l-0.022757,-0.0269l-0.022408,-0.0272l-0.022145,-0.0275l-0.021941,-0.0278l-0.021503,-0.0281l-0.021241,-0.0285l-0.02089,-0.0284l-0.020599,-0.029l-0.020278,-0.0291l-0.019869,-0.0293l-0.019607,-0.0296l-0.019286,-0.0303l-0.018877,-0.0299l-0.018585,-0.0305l-0.018294,-0.0309l-0.017885,-0.0308l-0.017565,-0.0312l-0.017185,-0.0314l-0.016835,-0.0318l-0.016514,-0.032l-0.016164,-0.0321l-0.015755,-0.0323l-0.015405,-0.0327l-0.015026,-0.033l-0.014647,-0.0329l-0.014296,-0.0333l-0.013918,-0.0336l-0.013538,-0.0338l-0.013158,-0.0339l-0.012721,-0.0342l-0.012371,-0.0344l-0.011963,-0.0345l-0.011612,-0.0348l-0.011146,-0.0348l-0.010766,-0.035l-0.010387,-0.0354l-0.009949,-0.0357l-0.0095406,-0.0357l-0.0091323,-0.0357l-0.0086946,-0.0363l-0.0082862,-0.0359l-0.0078777,-0.0366l-0.0074401,-0.0363l-0.0070023,-0.0366l-0.0065648,-0.0369l-0.0061271,-0.0369l-0.0056894,-0.0372l-0.0052518,-0.0372l-0.0048142,-0.0375l-0.0043765,-0.0372l-0.0039097,-0.0378l-0.0034428,-0.0375l-0.0030052,-0.0378l-0.00256755,-0.0381l-0.00207154,-0.0378l-0.00163389,-0.0381l-0.00116707,-0.0384l-0.00070024,-0.0381l-0.000233413,-0.0345l0,-72.045l0.000233413,-0.0345l0.00070024,-0.03826l0.00116707,-0.03819l0.00163389,-0.03807l0.00207154,-0.03798l0.00256755,-0.03789l0.0030052,-0.0378l0.003472,-0.03768l0.0039097,-0.03756l0.0043473,-0.03743l0.0048142,-0.03738l0.0052809,-0.0372l0.0056895,-0.03706l0.0061271,-0.03694l0.0065939,-0.03679l0.0070024,-0.03663l0.0074109,-0.03648l0.0078777,-0.03637l0.0082861,-0.03616l0.0087239,-0.03599l0.0091325,-0.03586l0.009541,-0.03566l0.009949,-0.0355l0.010387,-0.03531l0.010766,-0.03511l0.011174,-0.03493l0.011584,-0.03475l0.011962,-0.03455l0.012371,-0.03433l0.01275,-0.03413l0.01313,-0.03393l0.013538,-0.03373l0.013917,-0.03352l0.014267,-0.03327l0.014676,-0.03308l0.015026,-0.03284l0.015405,-0.03261l0.015756,-0.03239l0.016134,-0.03215l0.016485,-0.03194l0.016835,-0.03167l0.017185,-0.03143l0.017565,-0.0312l0.017885,-0.03095l0.018235,-0.03071l0.018586,-0.03043l0.018906,-0.03018l0.019257,-0.02995l0.019607,-0.02967l0.019898,-0.0294l0.020249,-0.02914l0.020569,-0.02887l0.020891,-0.02862l0.021211,-0.02833l0.021533,-0.02805l0.021824,-0.02776l0.022145,-0.0275l0.022466,-0.02723l0.022758,-0.02692l0.023078,-0.026634l0.023371,-0.026351l0.023662,-0.026052l0.023954,-0.025755l0.024275,-0.025456l0.024538,-0.025165l0.024858,-0.024854l0.025121,-0.024549l0.025413,-0.024237l0.025676,-0.02392l0.025967,-0.02362l0.026257,-0.023303l0.02652,-0.022988l0.02679,-0.02265l0.02707,-0.022323l0.02731,-0.022008l0.0276,-0.021667l0.02784,-0.021335l0.02812,-0.02101l0.02839,-0.020669l0.02863,-0.020327l0.02888,-0.01998l0.02915,-0.019625l0.02935,-0.019278l0.02964,-0.018927l0.02985,-0.018571l0.03011,-0.01821l0.03035,-0.017844l0.03057,-0.017485l0.03081,-0.017113l0.03102,-0.016732l0.03128,-0.016371l0.03148,-0.015982l0.03168,-0.015598l0.03195,-0.015226l0.03212,-0.014826l0.03236,-0.014437l0.03256,-0.01404l0.03274,-0.013647l0.03297,-0.013242l0.03317,-0.012837l0.03335,-0.012432l0.03353,-0.012014l0.03372,-0.011603l0.03394,-0.011186l0.03407,-0.010762l0.03429,-0.010336l0.03443,-0.009909l0.0346,-0.0094807l0.03478,-0.0090447l0.03495,-0.0086062l0.03507,-0.0081648l0.03525,-0.0077202l0.03539,-0.0072757l0.03554,-0.0068251l0.03565,-0.0063716l0.0358,-0.0059179l0.03594,-0.0054553l0.03607,-0.0049956l0.03615,-0.0045329l0.03629,-0.0040643l0.03641,-0.0035955l0.0365,-0.00312072l0.03659,-0.00264901l0.03671,-0.00217122l0.03679,-0.00169343l0.03685,-0.00121261l0.03697,-0.000728779l0.03332,-0.000217727l34.2363,0l0.0333,0.000217727l0.0367,0.000728779l0.0371,0.00121261l0.0368,0.00169343l0.0367,0.00217122l0.0365,0.00264901l0.0365,0.00312382l0.0364,0.0035924l0.0362,0.0040643l0.0362,0.0045329l0.0362,0.0049956l0.0359,0.0054553l0.0358,0.0059179l0.0356,0.0063716l0.0356,0.0068251l0.0353,0.0072757l0.0353,0.0077202l0.0351,0.0081617l0.035,0.0086093l0.0347,0.0090478l0.0347,0.0094736l0.0344,0.009916l0.0342,0.010333l0.0341,0.010762l0.0339,0.011189l0.0338,0.011603l0.0336,0.012014l0.0332,0.012429l0.0333,0.012837l0.0329,0.013242l0.0327,0.013647l0.0324,0.014028l0.0324,0.01444l0.0324,0.014851l0.0318,0.015204l0.0318,0.01561l0.0315,0.015994l0.0312,0.016329l0.0309,0.016753l0.031,0.017122l0.0303,0.017472l0.0304,0.017866l0.0303,0.018201l0.0298,0.018565l0.0294,0.018921l0.0295,0.019275l0.0292,0.019659l0.0289,0.019949l0.0286,0.020324l0.0283,0.020705l0.0283,0.020974l0.0277,0.021307l0.0277,0.021685l0.0274,0.022057l0.0269,0.022302l0.0268,0.022632l0.0266,0.022997l0.0262,0.023324l0.026,0.023599l0.0257,0.023908l0.0253,0.024273l0.0251,0.024537l0.0248,0.024842l0.0245,0.025153l0.0246,0.025456l0.0239,0.025752l0.0236,0.026055l0.0234,0.026351l0.023,0.026646l0.0228,0.02694l0.0224,0.02722l0.0222,0.02746l0.0219,0.02779l0.0216,0.02808l0.021,0.0283l0.021,0.02864l0.0204,0.02884l0.0204,0.02911l0.0199,0.02946l0.0195,0.02965l0.0193,0.02992l0.0189,0.03024l0.0187,0.03044l0.0181,0.03062l0.0178,0.03102l0.0178,0.0312l0.0169,0.03137l0.0169,0.03177l0.0167,0.03186l0.016,0.03217l0.0158,0.03241l0.0154,0.03257l0.0149,0.03288l0.0149,0.03302l0.0143,0.03333l0.0137,0.03347l0.0269,0.06769l0.025,0.06853l0.012,0.03444l0.0114,0.03472l0.0114,0.03503l0.0108,0.03512l0.0102,0.03532l0.0099,0.0355l0.0096,0.03559l0.0091,0.03586l0.0087,0.03603l0.0085,0.03611l0.0079,0.03638l0.0073,0.03653l0.007,0.0366l0.0067,0.03674l0.0061,0.03699l0.0055,0.03714l0.0053,0.03708l0.005,0.03729l0.0043,0.03756l0.0038,0.03765l0.0035,0.03768l0.0029,0.03768l0.0027,0.03792l0.002,0.03798l0.0018,0.0381l0.0011,0.0382l0.0006,0.03819l0.0003,0.03447l0,72.0451l-0.0003,0.0345l-0.0006,0.0381l-0.0011,0.0381l-0.0018,0.0384l-0.002,0.0378l-0.0027,0.0381l-0.0029,0.0375l-0.0035,0.0378l-0.0038,0.0378l-0.0043,0.0375l-0.005,0.0372l-0.0053,0.0372l-0.0055,0.0372l-0.0061,0.0369l-0.0067,0.0369l-0.007,0.0366l-0.0073,0.0366l-0.0079,0.0363l-0.0085,0.0359l-0.0087,0.0363l-0.0091,0.0357l-0.0093,0.0357l-0.0204,0.0708l-0.0108,0.0353l-0.0111,0.0348l-0.0117,0.0348l-0.012,0.0345l-0.0122,0.0344l-0.0128,0.0342l-0.0132,0.0339l-0.0137,0.0338l-0.0137,0.0336l-0.0143,0.0333l-0.0298,0.0659l-0.0154,0.0327l-0.0158,0.0323l-0.016,0.0321l-0.0167,0.032l-0.0169,0.0318l-0.0169,0.0314l-0.0356,0.0623l-0.0368,0.0611l-0.0189,0.0302l-0.0193,0.03l-0.0195,0.0296l-0.0199,0.0293l-0.0408,0.0581l-0.021,0.0284l-0.0213,0.0285l-0.0216,0.0281l-0.0219,0.0278l-0.0222,0.0275l-0.0221,0.0272l-0.0461,0.0536l-0.0234,0.0263l-0.0236,0.026l-0.0239,0.026l-0.0488,0.0505l-0.0251,0.0248l-0.025,0.0245l-0.0254,0.0242l-0.0257,0.0242l-0.026,0.0232l-0.0262,0.0236l-0.0266,0.0227l-0.0268,0.0227l-0.0272,0.0224l-0.0274,0.022l-0.0274,0.0218l-0.028,0.0212l-0.028,0.0208l-0.0283,0.0209l-0.0289,0.0203l-0.0286,0.0199l-0.0295,0.0197l-0.0294,0.0193l-0.0295,0.0188l-0.0598,0.0369l-0.0307,0.0178l-0.0303,0.0173l-0.0306,0.0172l-0.0316,0.0166l-0.0309,0.0164l-0.0315,0.016l-0.0318,0.0157l-0.0318,0.0151l-0.0324,0.0148l-0.0324,0.0146l-0.0324,0.0139l-0.0326,0.0136l-0.033,0.0133l-0.0333,0.0127l-0.0332,0.0124l-0.0333,0.0121l-0.0341,0.0115l-0.0339,0.0112l-0.0338,0.0105l-0.0342,0.0103l-0.0347,0.01l-0.0344,0.0097l-0.0347,0.0088l-0.0353,0.0087l-0.035,0.0082l-0.035,0.0075l-0.0356,0.0073l-0.0353,0.007l-0.0356,0.0063l-0.0359,0.0058l-0.0359,0.0054l-0.0362,0.0051l-0.0362,0.0046l-0.0362,0.0039l-0.0361,0.0036l-0.0365,0.0031l-0.0368,0.0027l-0.0367,0.0021l-0.0368,0.0018l-0.0365,0.0012l-0.0373,0.0006l-0.0333,0.0003Z" />
            <path class="speakerphone" d="M25.1637,5.84763l-10.3275,0c-0.2854,0 -0.5167,-0.23134 -0.5167,-0.51678c0,-0.2854 0.2313,-0.51523 0.5167,-0.51523l10.3275,0c0.2856,0 0.5167,0.22983 0.5167,0.51523c0,0.28544 -0.2311,0.51678 -0.5167,0.51678" style="fill-rule:nonzero;" />
            <g transform="matrix(1,0,0,1,0,-4.18416)">
                <rect class="top-bar" x="1.89119" y="13.2524" width="36.5786" height="1.03937" />
            </g>
            <g transform="matrix(1,0,0,1,-0.276922,51.924)">
                <rect class="bottom-bar" x="1.89119" y="13.2524" width="36.5786" height="1.03937" />
            </g>
        </g>
    </g>
  </svg><div><strong>Local community</strong><p></p></div>
</li></a>
</div>
</nav>
@endsection
