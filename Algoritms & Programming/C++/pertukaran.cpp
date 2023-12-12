#include <iostream>
using namespace std;

main()
{
	//deklarasi
	int A,B,C;
	
	//algoritma
	
	//nilai a dan b sebelum pertukaran 
	cout<<"Nilai A dan B sebelum pertukaran : "<<endl;cout<<"A : ";cin>>A;cout<<"B : ";cin>>B;
	
	//pertukaran a dan b 
	C=A;
	A=B;
	B=C;
	cout << "Nilai A dan B setelah pertukaran : "<<endl;cout<<"A : "<<A<<endl;cout<<"B : "<<B;
}
