#include <conio.h>
#include <stdio.h>
#include <iostream>

using namespace std;
int kelinci;
int kurakura;

int lap_satu(){
	kelinci=0;
	kurakura=0;
	int langkah=0;
	do {
		kelinci =(kelinci*2+1)%40;
		kurakura =(kurakura*2+1)%40;
		langkah++;
	}
	while (kelinci !=kurakura);
	return langkah;
}

int lap_dua(){
	lap_satu();
	kelinci=0;
	int langkah =0;
	do{
		kelinci =(kelinci*2+1)%40;
		kurakura =(kurakura*2+1)%40;
		langkah ++;
	}
	while (kelinci !=kurakura);
	return langkah;
}

