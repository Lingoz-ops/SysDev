const hero = document.querySelector(".hero");

const t1 = new TimelineMax();

t1.fromTo(hero,1,{height:"0%"},{height:"80%",ease:Power2.ease});