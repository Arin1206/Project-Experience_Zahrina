#include <iostream>
using namespace std;

main()
{
	//deklarasi 
	const persen=0.2;
	char NamaKaryawan; 
	int GajiPokok,tunjangan,pajak,GajiBersih;
	
	//algoritma 
	cout << "Nama Karyawan : ";cin>>NamaKaryawan;
	cout <<"Gaji Pokok : "; 
	cin>>GajiPokok;
	tunjangan=GajiPokok*persen;
	cout<<tunjangan;
	
}
