RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[0;33m'
NC='\033[0m' # No Color

if [ "$1" == "green" ]
then
    printf "${GREEN}"
elif [ "$1" == "yellow" ]
then
    printf "${YELLOW}"
elif [ "$1" == "red" ]
then
    printf "${RED}"
fi

echo -e "$2"
printf "${NC}\n"
echo "$2" >> "$logfilename"