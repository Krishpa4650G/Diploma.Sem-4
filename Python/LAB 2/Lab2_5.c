#include<stdio.h>
void main()
{
	int num,i=1,dummy,sum=0;
	printf("enter the value of num");
	scanf("%d",&num);
	for(i=1;i<=num;i++)
	{
		printf("%d \n",i*i);
		sum=sum+(i*i);
	}
	printf("so sum is %d",sum);
}

