function encrypt(mess, key){
	mess = Base64.encode(mess);
let iv = [3, 4, 5, 1, 0, 2, 8, 2, 6, 6, 0, 2, 8, 7, 8, 7];
let i = 0;
let strByteArrayMess = [];
	for(i = 0; i < mess.length; i++) strByteArrayMess.push(mess.charCodeAt(i));
			crpm = slowAES.encrypt(strByteArrayMess, slowAES.modeOfOperation.OFB, key, iv);
            return crpm;
     }
     function decrypt(mess, key){

         let i = 0;
         let iv = [3, 4, 5, 1, 0, 2, 8, 2, 6, 6, 0, 2, 8, 7, 8, 7];
		    a = slowAES.decrypt(mess, slowAES.modeOfOperation.OFB, key, iv);
            let b = '';
            while (i < a.length){
                
                b = b + String.fromCharCode(a[i]);
                i += 1;
                
            }
         crpm = Base64.decode(b);
            return crpm;



     }
