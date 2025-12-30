#include<stdio.h>
void main()
{
	float p,r,t,SI;
	printf("Enter value of p:\n");
	scanf("%f",&p);
	printf("Enter value of r:\n");
	scanf("%f",&r);
	printf("Enter value of t:\n");
	scanf("%f",&t);
	
	SI=(p*r*t)/100;
	printf("Simple Interesrt is:%f",SI);
}
