#include <stdio.h>
#include <stdlib.h>

#define NONE -1
#define ACTIVE 1
#define RANGE 100000

#define msg printf;

int task_status[RANGE]; //contains the number of subtasks
char *task_name[RANGE];
float task_progress[RANGE]; //contains the progress

void init()
{
    int i;
    for(i=0;i<RANGE;i++)
    {
        task_status[i] = NONE;
        task_progress[i] = 0.00f;
    }
}
void show_progress(int id)
{
    printf("Process name: %s\n",&task_name[id]);
    printf("Process progress: %f\n",task_progress[id]);

}
void update_progress(int id, int newst)
{
    //ADD Other stuffs
    task_progress[id] += (float)(newst)/(task_status[id])*100.00;

}
void set_your_goal()
{
    printf("ID: ");
    int id;
    scanf("%d",&id);
    if(task_status[id]==NONE)
    {
        printf("This task doesn't exist.\n");
        printf("Give a name for it: ");
        scanf("%s",&task_name[id]);
        printf("How many subtasks are there in this task?\n");
        scanf("%d",&task_status[id]);
    }

    show_progress(id);
    printf("How many new subtasks completed (Out of total %d subtasks)?\n",task_status[id]);
    int newst;
    scanf("%d",&newst);
    update_progress(id, newst);
    show_progress(id);
}
int main()
{
    init();
    printf("Starting TEXT\n");
    while(1)
    {
        set_your_goal();
    }
    return 0;
}
