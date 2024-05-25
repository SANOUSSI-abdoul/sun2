r// Written By CLRH

#include <stdio.h>
#include <stdlib.h>
int main()
{
    char j[10];
    time_t t;
    int number_of_sticks = 21, removed_sticks, turn = 1, i, choice, level;
    printf("\n¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤");
    printf("\n\t\t     STICK GAME");
    printf("\n¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤\n");
    printf("What's your name: ");
    scanf("%s", j);
    printf("\nHello %s, do you want to read the rules ?\n", j);
    printf("0 ~ YES\t\t1 ~ NO");
    printf("\n");
    do
    {
        scanf("%d", &choice);
    } while (choice != 0 && choice != 1);
    printf("\n");

    if (choice == 0)
    {
        printf("\nYou're going to play against the computer, there are 21 sticks in front of you\n");
        printf("At each turn the current player remove 1, 2, 3 or 4 sticks from the left sticks\n");
        printf("The one who picks the last stick is the looser.\n\n");
    }

    printf("Choose the level of the computer: \n");
    printf("0 ~ Easy\t\t1 ~ Hard\n");
    do
    {
        scanf("%d", &level);
    } while (level != 0 && level != 1 && level != 2);
    system("clear");
    srand((unsigned)time(&t));

    do
    {
        printf("%d\t", number_of_sticks);
        for (i = 0; i < number_of_sticks; i++)
        {
            printf("| ");
        }
        printf("\n\n");
        turn = 1 - turn;
        do
        {
            if (turn == 0)
            {
                printf("%s how many sticks do you remove: ", j);
                scanf("%d", &removed_sticks);
                printf("\n");
            }

            if (turn == 1)
            {

                if (level == 0)
                {
                    removed_sticks = rand() % 4 + 1;
                }

                if (level == 1)
                {
                    removed_sticks = 5 - removed_sticks;
                }
                printf("I remove %d sticks\n\n", removed_sticks);
            }
        } while ((removed_sticks < 1 || removed_sticks > 4) || (number_of_sticks <= removed_sticks));
        number_of_sticks -= removed_sticks;
    } while (number_of_sticks > 1);
    printf("1\t| \n\n");
    if (turn == 0)
    {
        printf("Congratulation %s, you've won !!\n", j);
    }
    else
    {
        printf("Ha ha ha , you have lost !!!\n");
    }

    return 0;
}