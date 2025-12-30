#include<stdio.h>
void main()
{
	int i=1,n;
	printf("Enter value of n:\n");
	scanf("%d",&n);
	
	while(i<=n)
	{
		printf("%d\n",i);
		i++;
	}
	printf("FOR LOOP");
	for(i=1;i<=n;i++)
	{
		printf("%d\n",i);
	}
}
