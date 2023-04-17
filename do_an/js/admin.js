// JavaScript Document
function hienthi1(obj){
		a=obj;
		console.log(a.id);
		switch(a.id)
			{
				case'dong':
					{
						document.getElementById('Xoasp').style.display='none';
						break;
					}
				case'ht':
					{
						document.getElementById('Xoasp').style.display='block';
						break;
					}
				
			}
		
	}