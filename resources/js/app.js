import "./bootstrap";

import Alpine from "alpinejs";
import {
    createIcons,
    Building2,
    BookOpenText,
    CalendarDays,
    ChevronDown,
    ChevronLeft,
    GraduationCap,
    School,
} from "lucide";

window.Alpine = Alpine;

Alpine.start();

createIcons({
    icons: {
        Building2,
        BookOpenText,
        CalendarDays,
        ChevronDown,
        ChevronLeft,
        GraduationCap,
        School,
    },
});
