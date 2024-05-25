#include<string.h>
#include<stdio.h>
int main ()
{
    int i,p,t,v;
    char verbes_2nd_groupe[400][25] = {"abasourdir", "abâtardir", "abêtir", "ablatir", "abolir", "abonnir", "aboutir", "abréagir", "abrutir", "accomplir", "accourcir", "adoucir", "affadir", "affaiblir", "affermir", "affranchir", "agir", "agonir", "agrandir", "aguerrir", "ahurir", "aigrir", "alanguir", "alentir", "allégir", "alourdir", "alunir", "amaigrir", "amatir", "amerrir", "ameublir", "amincir", "amoindrir", "amollir", "amortir", "anéantir", "anoblir", "anordir", "aplanir", "aplatir", "appauvrir", "appesantir", "applaudir", "appointir", "approfondir", "arrondir", "assagir", "assainir", "asservir", "assombrir", "assortir", "assoupir", "assouplir", "assourdir", "assouvir", "assujettir", "attendrir", "atterrir", "attiédir", "avachir", "avertir", "aveulir", "avilir", "bannir", "barrir", "bâtir", "bénir", "blanchir", "blêmir", "blettir", "bleuir", "blondir", "bondir", "bouffir", "brandir", "bruir", "brunir", "calmir", "candir", "catir", "chancir", "chauvir", "chérir", "choisir", "clapir", "compatir", "cônir", "convertir", "cotir", "crépir", "croupir", "débâtir", "débleuir", "décatir", "décrépir", "définir", "défléchir", "défleurir", "défraîchir", "dégarnir", "dégauchir", "déglutir", "dégourdir", "dégrossir", "déguerpir", "déjaunir", "démaigrir", "démolir", "démunir", "dénantir", "dépérir", "dépolir", "déraidir", "dérougir", "désemplir", "désenlaidir", "désépaissir", "désétablir", "désinvestir", "désobéir", "dessaisir", "dessertir", "désunir", "déverdir", "dévernir", "divertir", "doucir", "durcir", "ébahir", "éblouir", "ébroudir", "écatir", "échampir", "éclaircir", "écrouir", "effleurir", "élargir", "élégir", "embellir", "emboutir", "embrunir", "emplir", "empuantir", "enchérir", "endolorir", "endurcir", "enforcir", "enfouir", "engloutir", "engourdir", "enhardir", "enlaidir", "ennoblir", "enrichir", "ensevelir", "envahir", "épaissir", "épanouir", "époutir", "équarrir", "estourbir", "établir", "étourdir", "étrécir", "faiblir", "farcir", "finir", "fléchir", "flétrir", "fleurir", "forcir", "fouir", "fourbir", "fournir", "fraîchir", "franchir", "frémir", "froidir", "garantir", "garnir", "gauchir", "gémir", "glapir", "glatir", "grandir", "gravir", "grossir", "guérir", "haïr", "havir", "hennir", "honnir", "hourdir", "huir", "infléchir", "interagir", "intervertir", "invertir", "investir", "jaillir", "jaunir", "jouir", "languir", "lotir", "louchir", "maigrir", "matir", "mégir", "meurtrir", "mincir", "moisir", "moitir", "mollir", "mugir", "munir", "mûrir", "nantir", "noircir", "nordir", "nourrir", "obéir", "obscurcir", "ourdir", "pâlir", "pâtir", "périr", "pervertir", "pétrir", "polir", "pourrir", "préétablir", "prémunir", "punir", "rabonnir", "rabougrir", "raccourcir", "racornir", "radoucir", "raffermir", "rafraîchir", "ragaillardir", "raidir", "rajeunir", "ralentir", "ramollir", "rancir", "raplatir", "rapointir", "rappointir", "rassortir", "ravilir", "ravir", "réagir", "réassortir", "rebâtir", "reblanchir", "rebondir", "rechampir", "reconvertir", "recrépir", "redéfinir", "redémolir", "réfléchir", "refleurir", "refroidir", "regarnir", "régir", "regrossir", "réinvestir", "rejaillir", "réjouir", "rélargir", "rembrunir", "remplir", "renchérir", "renformir", "repolir", "resalir", "resplendir", "ressaisir", "ressurgir", "resurgir", "rétablir", "retentir", "rétrécir", "rétroagir", "réunir", "réussir", "reverdir", "revernir", "roidir", "rondir", "rosir", "rôtir", "rougir", "rouir", "roussir", "roustir", "rugir", "saisir", "salir", "saurir", "serfouir", "sertir", "sévir", "subir", "subvertir", "superfinir", "surenchérir", "surgir", "surir", "tarir", "tartir", "ternir", "terrir", "tiédir", "trahir", "transir", "travestir", "unir", "vagir", "verdir", "vernir", "vieillir", "vioquir", "vomir", "vrombir"};
    char VERB[25];
    char SUJ[6][12]={"Je","Tu","Il ou Elle","Nous","Vous","Ils ou Elles"};
    char SUJP1[6][20]={"Je m'","Tu t'","Il ou Elle s'","Nous nous","Vous vous","Ils ou Elles s'"};
    char SUJP2[6][20]={"Je me","Tu te","Il ou Elle se","Nous nous","Vous vous","Ils ou Elles se"};
    char TERP[6][10]={"is","is","it","issons","issez","issent"};
    char TERPA[6][10]={"is","is","ît","îmes","îtes","îment"};
    char TERFU[6][10]={"irai","iras","ira","irons","irez","iront"};
    char TERIMP[6][10]={"issais","issais","issait","issions","issiez","ssaient"};
    int present = 0;
     printf("\n BIENVENUE SUR CONJU2.SN LA PLATEFORME EDUCATIVE DEDIEE A LA CONJUGAISON DES VERBES DU SECOND GROUPE \n ");
    do
    {
        int i = 0;
       
        printf("\n Veuillez entrez un verbe du second groupe : ");
        scanf("%s", VERB);

        while ((strcmp(VERB, verbes_2nd_groupe[i]) != 0) && (i <= 400))
            i++;

        if (i < 400)
            v = 1;

    } while (v == 0);
    printf("Ce verbe est t'il du type? ");
    printf(" \n 1_Simple \n 2_Pronominal \n 3_Pronominal contracté\n");
    scanf("%d",&p);
    switch (p)
    {
     case 1:
      printf("-------------------------------------------------------------------------------------");
      printf("\n 1_PRESENT SIMPLE \t|| 2_PASSE SIMPLE \t|| 3_FUTUR SIMPLE ||\t 4_IMPARFAIT \n");
      printf("-------------------------------------------------------------------------------------\n");
    scanf("%d",&t); 
    switch (t)
    {
    case 1:
           VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJ[i],VERB,TERP[i]);
    }
        break;
    case 2:
       VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJ[i],VERB,TERPA[i]);
    }
    break;
    case 3:
      VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJ[i],VERB,TERFU[i]);
    } break;
    case 4:
     VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJ[i],VERB,TERIMP[i]);
    }
    break;
    default:
    printf("\n réesayez");
        break;
    }
        break;
     case 2:
      printf(" ------------------------------------------------------------------------------------");
      printf("\n 1_PRESENT SIMPLE \t|| 2_PASSE SIMPLE \t|| 3_FUTUR SIMPLE ||\t 4_IMPARFAIT \n");
      printf(" ------------------------------------------------------------------------------------\n");
    scanf("%d",&t);    
    switch (t)
    {
    case 1:
           VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP2[i],VERB,TERP[i]);
    }
        break;
    case 2:
       VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP2[i],VERB,TERPA[i]);
    }
    break;
    case 3:
      VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP2[i],VERB,TERFU[i]);
    } break;
    case 4:
     VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP2[i],VERB,TERIMP[i]);
    }
    break;
    default:
    printf("\n réesayez");
        break;
    }
     break;
     case 3:
      printf("\n A quel temps simple voulez vous conjuguer le verbe %s \n",VERB);
      printf("-------------------------------------------------------------------------------------");
      printf("\n 1_PRESENT SIMPLE \t|| 2_PASSE SIMPLE \t|| 3_FUTUR SIMPLE ||\t 4_IMPARFAIT \n");
      printf("-------------------------------------------------------------------------------------\n");
    scanf("%d",&t);
    switch (t)
    {
    case 1:
           VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP1[i],VERB,TERP[i]);
    }
        break;
    case 2:
       VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP1[i],VERB,TERPA[i]);
    }
    break;
    case 3:
      VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP1[i],VERB,TERFU[i]);
    } break;
    case 4:
     VERB[strlen(VERB)-2]='\0';
    for ( i = 0; i < 6; i++)
    {
        printf("%s %s%s\n",SUJP1[i],VERB,TERIMP[i]);
    }
    break;
    default:
    printf("\n réesayez");
        break;
    }
     default:
     printf("\n réesayez");
        break;
    }
    
    return 1;

    }


    
    
    
    
    