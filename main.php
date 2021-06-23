<style>
    * { margin: 0; padding: 0; }
    ul,li { list-style: none; }
    .slide { height: 500px; overflow: hidden; }
    .slide ul{ width: calc(100% * 4); display: flex; animation: slide 8s infinite;}
    .slide li{ width: calc(100% / 4); height: 500px; }
    .slide li:nth-child(1){ background-color:#1e2535;}
    .slide li:nth-child(2){ background-color:#486177;}
    .slide li:nth-child(3){ background-color:#9bb0f5;}
    .slide li:nth-child(4){ background-color:#rgba(21618829);}
    @keyframes slide {
      0% {margin-left:0;} /* 0 ~ 10  : 정지 */
      10% {margin-left:0;} /* 10 ~ 25 : 변이 */
      25% {margin-left:-100%;} /* 25 ~ 35 : 정지 */
      35% {margin-left:-100%;} /* 35 ~ 50 : 변이 */
      50% {margin-left:-200%;}
      60% {margin-left:-200%;}
      75% {margin-left:-300%;}
      85% {margin-left:-300%;}
      100% {margin-left:0;}
    }
  </style>
</head>
<body>
  <div class="slide">
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</body>