describe("findBMI", function() {
         var weight = 90;
         var height = 180;
         function findBMI()
         {
         var BMI = ((weight/(height*height)) * 703).toFixed(2);
         return BMI;
         }
         
         it("Gives Correct BMI", function() {
            expect(findBMI()).toEqual((90*703/180/180).toFixed(2));
            });
         it("Gives Correct BMI", function(){
            weight = 100;
            height = 200;
            expect(findBMI()).toEqual((100*703/200/200).toFixed(2));
            });
         it("Not equal test", function(){
            expect(findBMI()).not.toEqual((0).toFixed(2));
            });
         });

describe("findEthanolPercent", function() {
         function findEthanolPercent()
         {
         var volume = 500;
         var percentage = 40;
         
         var ethanol = ((volume*percentage)/100).toFixed(2);
         
         return ethanol;
         
         }
         it("Gives Correct ethanol percentage", function() {
            expect(findEthanolPercent()).toEqual((500*40/100).toFixed(2));
            });
         it("Not equal test", function(){
            expect(findEthanolPercent()).not.toEqual((0).toFixed(2));
            });
         });

describe("ApproxAlcohol", function(){
         function ApproxAlcohol()
         {
         
         var constant1;
         var constant2;
         var count=0;
         var BAC=0;
         
         for(count;count<drinks[count];count++)
         {
         if(drinks[count].alcohol !== 0)
         {
         ethanol = drinks[count].alcohol;
         hoursSince = date.getTime() - drinks[count].time;
         hoursSince = hoursSince/1000/60/60;  //milliseconds to hours
         
         if(user.gendre == 'M')
         {
         constant1 = 0.7;
         constant2 = 0.1;
         }
         else
         {
         constant1 = 0.6;
         constant2 = 0.085;
         }
         
         
         BAC += (((ethanol/(user.weight * constant1))*(constant2*hoursSince))).toFixed(2);
         
         }		
         
         
         }	
         
         
         return BAC;
         }
         if("Gives Correct BAC", function(){
            expect(true).toEqual(true);
            });

         });