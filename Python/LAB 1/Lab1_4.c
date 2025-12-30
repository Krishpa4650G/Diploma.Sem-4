#include<stdio.h>
void main()
{
	float a,b,c,d,total=0,percentage;
	printf("Enter value of a,b,c,d:\n");
	scanf("%f %f %f %f",&a,&b,&c,&d);
	
	total=a+b+c+d;
	percentage=(total/4.0);
	printf("The percentage is:%f",percentage);
}
