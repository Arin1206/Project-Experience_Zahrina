#include <iostream>
#include <stdio.h>
#include <conio.h>
using namespace std;

int f (int x, int y) {
	if (x==0|| y==0) {
		return 1;
	}
	else {
		return f(x-1,y)+f(x,y+1);
	}
}

main (){
	cout<<"Hasil : "<<f(0,0) ;
	getch();
}


