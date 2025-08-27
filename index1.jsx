import { MapContainer, TileLayer, Marker, Popup } from "react-leaflet";
import { Button } from "@/components/ui/button";

export default function Dashboard() {
  const capteurs = [
    { id: 1, name: "Caméra Nord", position: [35.93123, 0.08976], etat: "actif" },
    { id: 2, name: "Radar Est", position: [35.94567, 0.10234], etat: "inactif" },
  ];

  return (
    <div className="flex flex-col h-screen">
      {/* Header */}
      <header className="flex justify-between items-center bg-gray-900 text-white p-4 shadow-md">
        <h1 className="text-xl font-bold">OptiTraffic AI</h1>
        <nav className="space-x-4">
          <Button variant="ghost">Profil</Button>
          <Button variant="ghost">Intersections</Button>
          <Button variant="ghost">Capteurs</Button>
          <Button variant="destructive">Déconnexion</Button>
        </nav>
      </header>

      {/* Contenu */}
      <div className="flex flex-1">
        {/* Carte */}
        <div className="flex-1">
          <MapContainer center={[35.93123, 0.08976]} zoom={14} className="h-full">
            <TileLayer
              url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
            />
            {capteurs.map((c) => (
              <Marker key={c.id} position={c.position}>
                <Popup>
                  <strong>{c.name}</strong><br />
                  État: {c.etat}
                </Popup>
              </Marker>
            ))}
          </MapContainer>
        </div>

        {/* Sidebar */}
        <aside className="w-64 bg-gray-100 p-4 overflow-y-auto border-l">
          <h2 className="text-lg font-semibold mb-2">Capteurs</h2>
          <ul>
            {capteurs.map((c) => (
              <li key={c.id} className="p-2 border-b">
                {c.name} - <span className={c.etat === "actif" ? "text-green-600" : "text-red-600"}>{c.etat}</span>
              </li>
            ))}
          </ul>
        </aside>
      </div>
    </div>
  );
}
