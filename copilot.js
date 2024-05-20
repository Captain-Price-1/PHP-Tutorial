function calculateDaysBetweenDates(date1, date2){
    // your code here
    const diff = Math.abs(date1.getTime() - date2.getTime());
    const diffDays = Math.ceil(diff / (1000 * 3600 * 24));
    return diffDays;
}


