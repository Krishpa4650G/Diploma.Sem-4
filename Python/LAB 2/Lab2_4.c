#include<stdio.h>
void main()
{
	int n=32,i=0,sum=0;
	while(n>0)
	{
		int temp = n%10;
		sum=sum+temp;
		n=n/10;
	}
	printf("Sum: %d",sum);
}
