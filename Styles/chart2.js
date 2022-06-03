const ctx = document.getElementById("myChart").getContext("2d");
let delayed;
//Gradient fill


let gradient =ctx.createLinearGradient(0,0,0,400);
gradient.addColorStop(0,'rgba(58,123,213,1)');
gradient.addColorStop(1,'rgba(0,210,255,0.3)');



let gradient2 =ctx.createLinearGradient(0,0,0,400);
gradient2.addColorStop(0,'rgba(140, 20, 252,1 )');
gradient2.addColorStop(1,'rgba(0,210,255,0.3)');

const labels=[
  'Jan',
  'Feb',
  'Mar',
  'Apr',
  'May',
  'Jun',
  'Jul',
  'Aug',
  'Sep',
  'Oct',
  'Nov',
  'Dec',
];

const data={
  labels,
  datasets:[{
    data:chartdata,
    label:"Kwh Usage",
    fill:true,
    backgroundColor:gradient,
    borderColor:gradient2,
    pointBackgroundColor:"rgb(189,195,199)",
    tension:0.2 ,
  },
],
};

const config={type:'line',
data:data,
options:{

  animation: {
       onComplete: () => {
         delayed = true;
       },
       delay: (context) => {
         let delay = 0;
         if (context.type === 'data' && context.mode === 'default' && !delayed) {
           delay = context.dataIndex * 300 + context.datasetIndex * 100;
         }
         return delay;
       },
     },


  radius:4,
  hitRadius:30,
  hoverRadius:8,
  responsive:true,
  scales:{
    y:{
      ticks:{
        callback:function(value){return + value +"Kwh"}
      }
    }
  }
},
};


const myChart=new Chart(ctx,config);
